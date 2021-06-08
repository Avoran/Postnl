<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfResponseAddress extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'ResponseAddress';

    protected array $ResponseAddress;

    public function __construct(array $ResponseAddress)
    {
        $this->setResponseAddress($ResponseAddress);
    }

    public function getResponseAddress(): array
    {
        return $this->ResponseAddress;
    }

    public function setResponseAddress(array $ResponseAddress): static
    {
        $this->ResponseAddress = $ResponseAddress;

        return $this;
    }
}
