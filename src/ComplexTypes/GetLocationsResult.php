<?php

namespace DivideBV\Postnl\ComplexTypes;

class GetLocationsResult extends BaseType
{
    protected ArrayOfResponseLocation $ResponseLocation;

    protected ArrayOfWarning $Warnings;

    public function __construct(ArrayOfResponseLocation $ResponseLocation, ArrayOfWarning $Warnings)
    {
        $this->setResponseLocation($ResponseLocation);
        $this->setWarnings($Warnings);
    }

    public function getResponseLocation(): ArrayOfResponseLocation
    {
        return $this->ResponseLocation;
    }

    public function setResponseLocation(ArrayOfResponseLocation $ResponseLocation): static
    {
        $this->ResponseLocation = $ResponseLocation;

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
