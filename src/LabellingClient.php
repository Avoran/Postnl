<?php

namespace DivideBV\Postnl;

/**
 * Client class for CIF's labelling service.
 */
class LabellingClient extends BaseClient
{
    /**
     * The URL of the production WSDL.
     */
    protected const PRODUCTION_WSDL = 'https://api.postnl.nl/shipment/v2_0/label/soap.wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    protected const SANDBOX_WSDL = 'https://api-sandbox.postnl.nl/shipment/v2_0/label/soap.wsdl';

    /**
     * The complex types used by this client.
     */
    protected array $classes = [
        'GenerateLabelRequest',
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
        'GenerateLabelResponse',
        'ArrayOfMergedLabel',
        'MergedLabel',
        'ResponseShipment',
        'ArrayOfLabel',
        'Label',
        'ArrayOfResponseShipment',
        'ArrayOfWarning',
        'Warning',
    ];

    public function generateLabel(ComplexTypes\GenerateLabelRequest $request): ComplexTypes\ResponseShipment
    {
        return $this->__soapCall('GenerateLabel', [$request]);
    }

    public function generateLabelWithoutConfirm(
        ComplexTypes\GenerateLabelRequest $request
    ): ComplexTypes\ResponseShipment {
        return $this->__soapCall('GenerateLabelWithoutConfirm', [$request]);
    }
}
