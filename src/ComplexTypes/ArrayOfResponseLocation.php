<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfResponseLocation extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'ResponseLocation';

    protected array $ResponseLocation;

    public function __construct(array $ResponseLocation)
    {
        $this->setResponseLocation($ResponseLocation);
    }

    public function getResponseLocation(): array
    {
        return $this->ResponseLocation;
    }

    public function setResponseLocation(array $ResponseLocation): static
    {
        $this->ResponseLocation = $ResponseLocation;

        return $this;
    }
}
