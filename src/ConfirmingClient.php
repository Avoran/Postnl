<?php

namespace DivideBV\Postnl;

/**
 * Client class for CIF's confirming service.
 */
class ConfirmingClient extends BaseClient
{
    /**
     * The URL of the production WSDL.
     */
    protected const PRODUCTION_WSDL = 'https://api.postnl.nl/shipment/v1_9/confirm/soap.wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    protected const SANDBOX_WSDL = 'https://api-sandbox.postnl.nl/shipment/v1_9/confirm/soap.wsdl';

    /**
     * The complex types used by this client.
     */
    protected array $classes = [
        'ConfirmingMessage',
        'Customer',
        'Address',
        'Message',
        'ArrayOfShipment',
        'Shipment',
        'ArrayOfAddress',
        'ArrayOfAmount',
        'Amount',
        'ArrayOfContact',
        'Contact',
        'Customs',
        'ArrayOfContent',
        'Content',
        'Dimension',
        'ArrayOfGroup',
        'Group',
        'ArrayOfProductOption',
        'ProductOption',
        'ArrayOfConfirmingResponseShipment',
        'ConfirmingResponseShipment',
        'ArrayOfWarning',
        'Warning',
    ];

    public function confirming(ComplexTypes\ConfirmingMessage $message): ComplexTypes\ArrayOfConfirmingResponseShipment
    {
        return $this->__soapCall('Confirming', [$message]);
    }
}
