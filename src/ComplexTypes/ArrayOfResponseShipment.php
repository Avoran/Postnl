<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfResponseShipment extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'ResponseShipment';

    protected array $ResponseShipment;

    public function __construct(array $ResponseShipment)
    {
        $this->setResponseShipment($ResponseShipment);
    }

    public function getResponseShipment(): array
    {
        return $this->ResponseShipment;
    }

    public function setResponseShipment(array $ResponseShipment): static
    {
        $this->ResponseShipment = $ResponseShipment;

        return $this;
    }
}
