<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfAddress extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'Address';

    protected array $Address;

    public function __construct(array $Address)
    {
        $this->setAddress($Address);
    }

    public function getAddress(): array
    {
        return $this->Address;
    }

    public function setAddress(array $Address): static
    {
        $this->Address = $Address;

        return $this;
    }
}
