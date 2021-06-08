<?php

namespace DivideBV\Postnl;

/**
 * Client class for CIF's shipping status service.
 */
class ShippingStatusClient extends BaseClient
{
    /**
     * The URL of the production WSDL.
     */
    protected const PRODUCTION_WSDL = 'https://api.postnl.nl/shipment/v1_6/status/soap.wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    protected const SANDBOX_WSDL = 'https://api-sandbox.postnl.nl/shipment/v1_6/status/soap.wsdl';

    /**
     * The complex types used by this client.
     */
    protected array $classes = [
        'CurrentStatusRequest',
        'Message',
        'RequestCustomer',
        'RequestShipment',
        'CurrentStatusResponse',
        'ArrayOfCurrentStatusResponseShipment',
        'CurrentStatusResponseShipment',
        'ArrayOfResponseAddress',
        'ResponseAddress',
        'ArrayOfResponseAmount',
        'ResponseAmount',
        'ResponseDimension',
        'ResponseExpectation',
        'ArrayOfResponseGroup',
        'ResponseGroup',
        'ArrayOfResponseProductOption',
        'ResponseProductOption',
        'ResponseStatus',
        'ArrayOfWarning',
        'Warning',
        'CompleteStatusRequest',
        'CompleteStatusResponse',
        'ArrayOfCompleteStatusResponseShipment',
        'CompleteStatusResponseShipment',
        'ResponseCustomer',
        'ArrayOfCompleteStatusResponseEvent',
        'CompleteStatusResponseEvent',
        'ArrayOfCompleteStatusResponseOldStatus',
        'CompleteStatusResponseOldStatus',
        'CurrentStatusByReferenceRequest',
        'CompleteStatusByReferenceRequest',
        'CurrentStatusByStatusRequest',
        'RequestShipmentStatus',
        'CurrentStatusByPhaseRequest',
        'RequestShipmentPhase',
        'GetSignatureRequest',
        'RequestSignature',
        'GetSignatureResponse',
        'ArrayOfGetSignatureResponseSignature',
        'GetSignatureResponseSignature',
    ];

    public function currentStatus(ComplexTypes\CurrentStatusRequest $request): ComplexTypes\CurrentStatusResponse
    {
        return $this->__soapCall('CurrentStatus', [$request]);
    }

    public function completeStatus(ComplexTypes\CompleteStatusRequest $request): ComplexTypes\CompleteStatusResponse
    {
        return $this->__soapCall('CompleteStatus', [$request]);
    }

    public function currentStatusByReference(
        ComplexTypes\CurrentStatusByReferenceRequest $request
    ): ComplexTypes\CurrentStatusResponse {
        return $this->__soapCall('CurrentStatusByReference', [$request]);
    }

    public function completeStatusByReference(
        ComplexTypes\CompleteStatusByReferenceRequest $request
    ): ComplexTypes\CompleteStatusResponse {
        return $this->__soapCall('CompleteStatusByReference', [$request]);
    }

    public function currentStatusByStatus(
        ComplexTypes\CurrentStatusByStatusRequest $request
    ): ComplexTypes\CurrentStatusResponse {
        return $this->__soapCall('CurrentStatusByStatus', [$request]);
    }

    public function currentStatusByPhase(
        ComplexTypes\CurrentStatusByPhaseRequest $request
    ): ComplexTypes\CurrentStatusResponse {
        return $this->__soapCall('CurrentStatusByPhase', [$request]);
    }

    public function getSignature(ComplexTypes\GetSignatureRequest $request): ComplexTypes\GetSignatureResponse
    {
        return $this->__soapCall('GetSignature', [$request]);
    }
}
