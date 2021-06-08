<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfCurrentStatusResponseShipment extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'CurrentStatusResponseShipment';

    protected array $CurrentStatusResponseShipment;

    public function __construct(array $CurrentStatusResponseShipment)
    {
        $this->setCurrentStatusResponseShipment($CurrentStatusResponseShipment);
    }

    public function getCurrentStatusResponseShipment(): array
    {
        return $this->CurrentStatusResponseShipment;
    }

    public function setCurrentStatusResponseShipment(array $CurrentStatusResponseShipment): static
    {
        $this->CurrentStatusResponseShipment = $CurrentStatusResponseShipment;

        return $this;
    }
}
