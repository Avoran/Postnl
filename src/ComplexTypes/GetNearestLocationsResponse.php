<?php

namespace DivideBV\Postnl\ComplexTypes;

/**
 * XML namespace: http://postnl.nl/cif/domain/BarcodeWebService/
 */
class GetNearestLocationsResponse extends BaseType
{
    protected ArrayOfGetLocationsResult $NearestLocationsResult;

    protected ArrayOfWarning $Warnings;

    public function __construct(ArrayOfGetLocationsResult $NearestLocationsResult, ArrayOfWarning $Warnings)
    {
        $this->setNearestLocation($NearestLocationsResult);
        $this->setWarnings($Warnings);
    }

    public function getNearestLocations(): ArrayOfGetLocationsResult
    {
        return $this->NearestLocationsResult;
    }

    public function setNearestLocation(ArrayOfGetLocationsResult $NearestLocationsResult): static
    {
        $this->NearestLocationsResult = $NearestLocationsResult;

        return $this;
    }

    public function getWarnings(): ArrayOfWarning
    {
        return $this->Warnings;
    }

    public function setWarnings(ArrayOfWarning $Warnings): static
    {
        $this->Warnings = $Warnings;

        return $this;
    }
}
