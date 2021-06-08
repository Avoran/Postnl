<?php

namespace DivideBV\Postnl;

/**
 * Client class for CIF's delivery date service.
 */
class DeliveryDateClient extends BaseClient
{
    /**
     * The URL of the production WSDL.
     */
    protected const PRODUCTION_WSDL = 'https://api.postnl.nl/shipment/v2_1/calculate/date/soap.wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    protected const SANDBOX_WSDL = 'https://api-sandbox.postnl.nl/shipment/v2_1/calculate/date/soap.wsdl';

    /**
     * The complex types used by this client.
     */
    protected array $classes = [
        'ArrayOfCutOffTime',
        'ArrayOfExceptionData',
        'CifException',
        'CutOffTime',
        'ExceptionData',
        'GetDeliveryDate',
        'GetDeliveryDateRequest',
        'GetDeliveryDateResponse',
        'GetSentDate',
        'GetSentDateRequest',
        'GetSentDateResponse',
        'Message'
    ];

    public function getDeliveryDate(ComplexTypes\GetDeliveryDateRequest $request): ComplexTypes\GetDeliveryDateResponse
    {
        return $this->__soapCall('GetDeliveryDate', [$request]);
    }

    public function getSentDate(ComplexTypes\GetSentDateRequest $request): ComplexTypes\GetSentDateResponse
    {
        return $this->__soapCall('GetSentDate', [$request]);
    }
}
