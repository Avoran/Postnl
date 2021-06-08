<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfConfirmingResponseShipment extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'ConfirmingResponseShipment';

    protected array $ConfirmingResponseShipment;

    public function __construct(array $ConfirmingResponseShipment)
    {
        $this->setConfirmingResponseShipment($ConfirmingResponseShipment);
    }

    public function getConfirmingResponseShipment(): array
    {
        return $this->ConfirmingResponseShipment;
    }

    public function setConfirmingResponseShipment(array $ConfirmingResponseShipment): static
    {
        $this->ConfirmingResponseShipment = $ConfirmingResponseShipment;

        return $this;
    }
}
