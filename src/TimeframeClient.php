<?php

namespace DivideBV\Postnl;

/**
 * Client class for CIF's location service.
 */
class TimeframeClient extends BaseClient
{
    /**
     * The URL of the production WSDL.
     */
    protected const PRODUCTION_WSDL = 'https://api.postnl.nl/shipment/v2_0/calculate/timeframes/soap.wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    protected const SANDBOX_WSDL = 'https://api-sandbox.postnl.nl/shipment/v2_0/calculate/timeframes/soap.wsdl';

    /**
     * The complex types used by this client.
     */
    protected array $classes = [
        'GetTimeframes',
        'ArrayOfReasonNoTimeframe',
        'ArrayOfTimeframe',
        'ArrayOfTimeframeTimeFrame',
        'GetTimeframesRequest',
        'GetTimeframesResponse',
        'Message',
        'ReasonNoTimeframe',
        'Timeframe',
        'TimeframeRequest',
        'TimeframeTimeFrame',
    ];

    public function getTimeframes(ComplexTypes\GetTimeframesRequest $request): mixed
    {
        return $this->__soapCall('GetTimeframes', [$request]);
    }
}
