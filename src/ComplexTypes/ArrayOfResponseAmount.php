<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfResponseAmount extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'ResponseAmount';

    protected array $ResponseAmount;

    public function __construct(array $ResponseAmount)
    {
        $this->setResponseAmount($ResponseAmount);
    }

    public function getResponseAmount(): array
    {
        return $this->ResponseAmount;
    }

    public function setResponseAmount(array $ResponseAmount): static
    {
        $this->ResponseAmount = $ResponseAmount;

        return $this;
    }
}
