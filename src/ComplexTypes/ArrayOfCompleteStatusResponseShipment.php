<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfCompleteStatusResponseShipment extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'CompleteStatusResponseShipment';

    protected array $CompleteStatusResponseShipment;

    public function __construct(array $CompleteStatusResponseShipment)
    {
        $this->setCompleteStatusResponseShipment($CompleteStatusResponseShipment);
    }

    public function getCompleteStatusResponseShipment(): array
    {
        return $this->CompleteStatusResponseShipment;
    }

    public function setCompleteStatusResponseShipment(array $CompleteStatusResponseShipment): static
    {
        $this->CompleteStatusResponseShipment = $CompleteStatusResponseShipment;

        return $this;
    }
}
