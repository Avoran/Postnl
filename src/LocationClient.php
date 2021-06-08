<?php

namespace DivideBV\Postnl;

/**
 * Client class for CIF's location service.
 */
class LocationClient extends BaseClient
{
    /**
     * The URL of the production WSDL.
     */
    protected const PRODUCTION_WSDL = 'https://api.postnl.nl/shipment/v2_1/locations/soap.wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    protected const SANDBOX_WSDL = 'https://api-sandbox.postnl.nl/shipment/v2_1/locations/soap.wsdl';

    /**
     * The complex types used by this client.
     */
    protected array $classes = [
        'Address',
        'ArrayOfExceptionData',
        'ArrayOfResponseLocation',
        'ArrayOfWarning',
        'BaseLocation',
        'CifException',
        'Coordinate',
        'ExceptionData',
        'GetLocationRequest',
        'GetLocationsInAreaRequest',
        'GetLocationsResponse',
        'GetNearestLocationsRequest',
        'Location',
        'LocationArea',
        'Message',
        'OpeningHours',
        'ResponseLocation',
        'Warning',
    ];

    public function getNearestLocations(
        ComplexTypes\GetNearestLocationsRequest $request
    ): ComplexTypes\GetLocationsResult {
        return $this->__soapCall('GetNearestLocations', [$request]);
    }

    public function getLocation(ComplexTypes\GetLocationRequest $request): ComplexTypes\GetLocationsResponse
    {
        return $this->__soapCall('GetLocation', [$request]);
    }
}
