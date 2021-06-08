<?php

namespace DivideBV\Postnl\ComplexTypes;

class GetLocationsResponse extends BaseType
{
    protected ArrayOfResponseLocation $GetLocationsResult;

    protected ArrayOfWarning $Warnings;

    public function __construct(ArrayOfResponseLocation $GetLocationsResult, ArrayOfWarning $Warnings)
    {
        $this->setGetLocationsResult($GetLocationsResult);
        $this->setWarnings($Warnings);
    }

    public function getGetLocationsResult(): ArrayOfResponseLocation
    {
        return $this->GetLocationsResult;
    }

    public function setGetLocationsResult(ArrayOfResponseLocation $GetLocationsResult): static
    {
        $this->GetLocationsResult = $GetLocationsResult;

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
