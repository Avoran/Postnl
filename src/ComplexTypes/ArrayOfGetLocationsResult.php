<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfGetLocationsResult extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'GetLocationsResult';

    protected array $LocationsResult;

    public function __construct(array $LocationsResult)
    {
        $this->setLocationsResult($LocationsResult);
    }

    public function getLocationsResult(): array
    {
        return $this->LocationsResult;
    }

    public function setLocationsResult(array $LocationsResult): static
    {
        $this->LocationsResult = $LocationsResult;

        return $this;
    }
}
