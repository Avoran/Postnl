<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfProductOption extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'ProductOption';

    protected array $ProductOption;

    public function __construct(array $ProductOption)
    {
        $this->setProductOption($ProductOption);
    }

    public function getProductOption(): array
    {
        return $this->ProductOption;
    }

    public function setProductOption(array $ProductOption): static
    {
        $this->ProductOption = $ProductOption;

        return $this;
    }
}
