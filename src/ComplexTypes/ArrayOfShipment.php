<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfShipment extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'Shipment';

    protected array $Shipment;

    public function __construct(array $Shipment)
    {
        $this->setShipment($Shipment);
    }

    public function getShipment(): array
    {
        return $this->Shipment;
    }

    public function setShipment(array $Shipment): static
    {
        $this->Shipment = $Shipment;

        return $this;
    }
}
