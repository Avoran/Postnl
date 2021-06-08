<?php

namespace DivideBV\Postnl;

use DOMDocument;
use SoapFault;

/**
 * This class is a high-level wrapper around the various CIF services.
 */
class Postnl
{
    protected string $customerNumber = '';

    protected string $customerCode = '';

    protected string $customerName = '';

    protected string $apikey = '';

    protected string $collectionLocation = '';

    protected string $globalPackBarcodeType = '';

    protected string $globalPackCustomerCode = '';

    protected bool $sandbox = false;

    /**
     * An array with instantiated CIF clients.
     */
    protected array $clients = [];

    /**
     * Contains the property name of the last used SOAP client.
     */
    private string $lastClient = '';

    /**
     * Maps the country code to the required barcode type.
     */
    protected array $countryCodeMapping = [
        // Dutch domestic product.
        'NL' => '3S',
        // EPS products.
        'AT' => '3S',
        'BE' => '3S',
        'BG' => '3S',
        'CZ' => '3S',
        'CY' => '3S',
        'DK' => '3S',
        'EE' => '3S',
        'FI' => '3S',
        'FR' => '3S',
        'DE' => '3S',
        'GB' => '3S',
        'GR' => '3S',
        'HU' => '3S',
        'IE' => '3S',
        'IT' => '3S',
        'LV' => '3S',
        'LT' => '3S',
        'LU' => '3S',
        'PL' => '3S',
        'PT' => '3S',
        'RO' => '3S',
        'SK' => '3S',
        'SI' => '3S',
        'ES' => '3S',
        'SE' => '3S',
        // Everything else is GlobalPack.
    ];

    public function __construct(
        string $customerNumber,
        string $customerCode,
        string $customerName,
        string $apikey,
        string $collectionLocation,
        string $globalPack,
        bool $sandbox = false
    ) {
        $this->customerNumber = $customerNumber;
        $this->customerCode = $customerCode;
        $this->customerName = $customerName;
        $this->apikey = $apikey;
        $this->collectionLocation = $collectionLocation;
        $this->globalPackBarcodeType = (string) preg_filter('/^(.{2})(.{4})$/', '$1', $globalPack);
        $this->globalPackCustomerCode = (string) preg_filter('/^(.{2})(.{4})$/', '$2', $globalPack);
        $this->sandbox = $sandbox;
    }

    public function setBarcodeClient(BarcodeClient $barcodeClient): void
    {
        $this->clients['BarcodeClient'] = $barcodeClient;
    }

    public function setConfirmingClient(ConfirmingClient $confirmingClient): void
    {
        $this->clients['ConfirmingClient'] = $confirmingClient;
    }

    public function setLabellingClient(LabellingClient $labellingClient): void
    {
        $this->clients['LabellingClient'] = $labellingClient;
    }

    public function setShippingStatusClient(ShippingStatusClient $shippingStatusClient): void
    {
        $this->clients['ShippingStatusClient'] = $shippingStatusClient;
    }

    public function setTimeframeClient(TimeframeClient $timeframeClient): void
    {
        $this->clients['TimeframeClient'] = $timeframeClient;
    }

    public function setDeliveryDateClient(DeliveryDateClient $deliveryDateClient): void
    {
        $this->clients['DeliveryDateClient'] = $deliveryDateClient;
    }

    public function generateBarcode(
        string $type,
        ?string $customerCode = null,
        ?string $customerNumber = null,
        ?string $serie = null,
        bool $eps = false
    ): ComplexTypes\GenerateBarcodeResponse {
        // Validate $type parameter.
        if (!in_array($type, ['2S', '3S', 'CC', 'CP', 'CD', 'CF', 'CV', 'CL'])) {
            throw new Exceptions\InvalidBarcodeTypeException($type);
        }

        // Default customer code and number.
        if (!$customerCode) {
            // Use the separate GlobalPack customer code for those shipments.
            $customerCode = in_array($type, ['2S', '3S']) ? $this->customerCode : $this->globalPackCustomerCode;
        }
        $customerNumber = $customerNumber ?: $this->customerNumber;

        // Default serie.
        if (!$serie) {
            switch ($type) {
                case '2S':
                    $serie = '0000000-9999999';
                    break;
                case '3S':
                    // 3S barcodes are the only ones that may be 15 characters
                    // long.
                    $serie = '000000000-999999999';
                    if ($eps) {
                        // 3S barcodes for EPS parcels need to be 13 characters
                        // long.
                        $serie = '0000000-9999999';
                    }
                    break;
                default:
                    // Globalpack is 4 digits, because the barcode is suffixed
                    // with the ISO country code.
                    $serie = '0000-9999';
            }
        }

        // Prepare arguments.
        $message = new ComplexTypes\Message();
        $customer = new ComplexTypes\GenerateBarcodeCustomer($customerCode, $customerNumber);
        $barcode = new ComplexTypes\Barcode($type, $customerCode, $serie);
        $generateBarcodeMessage = new ComplexTypes\GenerateBarcodeMessage($message, $customer, $barcode);

        // Query the webservice and return the result.
        return $this->call('BarcodeClient', __FUNCTION__, $generateBarcodeMessage);
    }

    public function generateBarcodeByDestination(
        string $countryCode,
        ?string $customerCode = null,
        ?string $customerNumber = null,
        ?string $serie = null
    ): ComplexTypes\GenerateBarcodeResponse {
        $eps = false;

        // If this country code has an explicit barcode type mapping, use it.
        if (in_array($countryCode, array_keys($this->countryCodeMapping))) {
            $type = $this->countryCodeMapping[$countryCode];
            $eps = $countryCode != 'NL';
        } else {
            // Otherwise use GlobalPack.
            $type = $this->globalPackBarcodeType;
        }

        return $this->generateBarcode($type, $customerCode, $customerNumber, $serie, $eps);
    }

    public function confirming(ComplexTypes\ArrayOfShipment $shipments): ComplexTypes\ArrayOfConfirmingResponseShipment
    {
        // Prepare arguments.
        $customer = new ComplexTypes\Customer($this->customerNumber, $this->customerCode, $this->collectionLocation);
        $message = new ComplexTypes\Message();
        $confirmingMessage = new ComplexTypes\ConfirmingMessage($customer, $message, $shipments);

        // Query the webservice and return the result.
        return $this->call('ConfirmingClient', __FUNCTION__, $confirmingMessage);
    }

    public function generateLabel(
        ComplexTypes\Shipment $shipment,
        string $printerType = 'GraphicFile|PDF',
        bool $confirm = true
    ): ComplexTypes\ResponseShipment {
        $result = $this->generateLabels(new ComplexTypes\ArrayOfShipment([$shipment]), $printerType, $confirm);

        // Return only the first shipment (there should be only 1).
        return $result->getResponseShipments()[0];
    }

    public function generateLabelWithoutConfirm(
        ComplexTypes\Shipment $shipment,
        string $printerType = 'GraphicFile|PDF'
    ): ComplexTypes\ResponseShipment {
        return $this->generateLabel($shipment, $printerType, false);
    }

    public function generateLabels(
        ComplexTypes\ArrayOfShipment $shipments,
        string $printerType = 'GraphicFile|PDF',
        bool $confirm = true
    ): ComplexTypes\GenerateLabelResponse {
        // Prepare arguments.
        $message = new ComplexTypes\LabellingMessage($printerType);
        $customer = new ComplexTypes\Customer($this->customerNumber, $this->customerCode, $this->collectionLocation);
        $request = new ComplexTypes\GenerateLabelRequest($message, $customer, $shipments);

        // Query the webservice and return the result.
        return $this->call('LabellingClient', $confirm ? 'generateLabel' : 'generateLabelWithoutConfirm', $request);
    }

    public function generateLabelsWithoutConfirm(
        ComplexTypes\ArrayOfShipment $shipments,
        string $printerType = 'GraphicFile|PDF'
    ): ComplexTypes\GenerateLabelResponse {
        return $this->generateLabels($shipments, $printerType, false);
    }

    public function currentStatus(string $barcode): ComplexTypes\CurrentStatusResponse
    {
        // Prepare arguments.
        $message = new ComplexTypes\Message();
        $customer = new ComplexTypes\RequestCustomer($this->customerCode, $this->customerNumber);
        $shipment = new ComplexTypes\RequestShipment($barcode);
        $request = new ComplexTypes\CurrentStatusRequest($message, $customer, $shipment);

        // Query the webservice and return the result.
        return $this->call('ShippingStatusClient', __FUNCTION__, $request);
    }

    public function getSignature(string $barcode): ComplexTypes\GetSignatureResponse
    {
        // Prepare arguments.
        $message = new ComplexTypes\Message();
        $customer = new ComplexTypes\RequestCustomer($this->customerCode, $this->customerNumber);
        $shipment = new ComplexTypes\RequestSignature($barcode);
        $request = new ComplexTypes\GetSignatureRequest($message, $customer, $shipment);

        // Query the webservice and return the result.
        return $this->call('ShippingStatusClient', __FUNCTION__, $request);
    }

    public function getNearestLocations(
        string $postalCode,
        string $allowSundaySorting = 'false',
        ?string $deliveryDate = null,
        string $countryCode = 'NL'
    ): ComplexTypes\GetNearestLocationsResponse {
        $message = new ComplexTypes\Message();
        $location = new ComplexTypes\Location($postalCode, $allowSundaySorting, $deliveryDate);

        $request = new ComplexTypes\GetNearestLocationsRequest($message, $location, $countryCode);
        return $this->call('LocationClient', __FUNCTION__, $request);
    }

    public function getTimeframes(
        string $postalCode,
        string $houseNumber,
        array $options = ['Daytime'],
        ?string $startDate = null,
        ?string $endDate = null,
        string $countryCode = 'NL',
        string $allowSundaySorting = 'false'
    ): ComplexTypes\GetTimeframesResponse {
        $message = new ComplexTypes\Message();
        $timeframeRequest = new ComplexTypes\TimeframeRequest(
            $postalCode,
            $houseNumber,
            $options,
            $startDate,
            $endDate,
            $countryCode,
            $allowSundaySorting
        );
        $request = new ComplexTypes\GetTimeframesRequest($message, $timeframeRequest);

        return $this->call('TimeframeClient', __FUNCTION__, $request);
    }

    public function getDeliveryDate(
        string $postalCode,
        ComplexTypes\ArrayOfCutOffTime $cutOffTimes,
        string $shippingDate,
        int $shippingDuration = 1,
        array $options = ['Daytime'],
        string $allowSundaySorting = 'false',
        string $countryCode = 'NL'
    ): ComplexTypes\GetDeliveryDateResponse {
        $GetDeliveryDate = ComplexTypes\GetDeliveryDate::create()
            ->setPostalCode($postalCode)
            ->setCutOffTimes($cutOffTimes)
            ->setShippingDate($shippingDate)
            ->setShippingDuration($shippingDuration)
            ->setOptions($options)
            ->setAllowSundaySorting($allowSundaySorting)
            ->setCountryCode($countryCode);

        $message = new ComplexTypes\Message();
        $request = new ComplexTypes\GetDeliveryDateRequest($message, $GetDeliveryDate);

        // Query the webservice and return the result.
        return $this->call('DeliveryDateClient', __FUNCTION__, $request);
    }

    public function getLocation(
        string $locationCode,
        string $retailNetworkId = 'PNPNL-01'
    ): ComplexTypes\GetLocationsResponse {
        $message = new ComplexTypes\Message();

        $request = new ComplexTypes\GetLocationRequest($locationCode, $message, $retailNetworkId);
        return $this->call('LocationClient', __FUNCTION__, $request);
    }

    /**
     * Get the raw XML of the last SOAP request and reponse.
     */
    public function debug(): array
    {
        // Prevent accessing empty property.
        if (!$this->lastClient) {
            return [];
        }

        $requestXml = new DOMDocument();
        $requestXml->loadXML($this->getClient($this->lastClient)->__getLastRequest());
        $requestXml->formatOutput = true;

        $responseXml = new DOMDocument();
        $responseXml->loadXML($this->getClient($this->lastClient)->__getLastResponse());
        $responseXml->formatOutput = true;

        return ['request' => $requestXml->saveXML(), 'response' => $responseXml->saveXML()];
    }

    /**
     * Get CIF client by name. Takes care of instantiating clients if needed.
     */
    protected function getClient(string $clientName): mixed
    {
        // Instantiate the client if not set yet.
        if (!isset($this->clients[$clientName])) {
            $className = __NAMESPACE__ . "\\$clientName";
            $this->clients[$clientName] = new $className($this->apikey, $this->sandbox);
        }

        // Keep track of last used client for debugging purposes.
        $this->lastClient = $clientName;

        return $this->clients[$clientName];
    }

    public function call(string $clientName, string $method, mixed $parameter): mixed
    {
        try {
            return $this->getClient($clientName)->{$method}($parameter);
        } catch (SoapFault $exception) {
            if ($exception->faultcode == 's:CIF Framework Message Interceptor') {
                // This SoapFault was generated by the CIF service.

                // Assemble exception data from the response.
                $exceptionData = [];
                $errors = $exception->detail->CifException->Errors->ExceptionData;
                // Make sure `$errors` is an array.
                $errors = is_array($errors) ? $errors : [$errors];
                foreach ($errors as $error) {
                    $exceptionData[] = ComplexTypes\ExceptionData::create()
                        ->setDescription($error->Description)
                        ->setErrorMsg($error->ErrorMsg)
                        ->setErrorNumber($error->ErrorNumber);
                }

                // Throw a CifException instead.
                throw new ComplexTypes\CifException(new ComplexTypes\ArrayOfExceptionData($exceptionData));
            } else {
                // This SoapFault has another source, pass it up the stack.
                throw $exception;
            }
        }
    }
}
