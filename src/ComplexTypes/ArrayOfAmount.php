<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfAmount extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'Amount';

    protected array $Amount;

    public function __construct(array $Amount)
    {
        $this->setAmount($Amount);
    }

    public function getAmount(): array
    {
        return $this->Amount;
    }

    public function setAmount(array $Amount): static
    {
        $this->Amount = $Amount;

        return $this;
    }
}
