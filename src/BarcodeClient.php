<?php

namespace DivideBV\Postnl;

/**
 * Client class for CIF's barcode service.
 *
 * I'm sorry, but what moron concocted this service? Basically all it does is
 * generate a random number and concatenate `type`, `range` and the generated
 * number. And what use is it to ask for the same parameter twice?
 */
class BarcodeClient extends BaseClient
{
    /**
     * The URL of the production WSDL.
     */
    protected const PRODUCTION_WSDL = 'https://api.postnl.nl/shipment/v1_1/barcode/soap.wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    protected const SANDBOX_WSDL = 'https://api-sandbox.postnl.nl/shipment/v1_1/barcode/soap.wsdl';

    /**
     * The complex types used by this client.
     */
    protected array $classes = [
        'GenerateBarcodeMessage',
        'Message',
        'GenerateBarcodeCustomer',
        'Barcode',
        'GenerateBarcodeResponse',
    ];

    public function generateBarcode(ComplexTypes\GenerateBarcodeMessage $message): ComplexTypes\GenerateBarcodeResponse
    {
        return $this->__soapCall('GenerateBarcode', [$message]);
    }
}
