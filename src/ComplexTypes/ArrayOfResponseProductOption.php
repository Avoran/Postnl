<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfResponseProductOption extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'ResponseProductOption';

    protected array $ResponseProductOption;

    public function __construct(array $ResponseProductOption)
    {
        $this->setResponseProductOption($ResponseProductOption);
    }

    public function getResponseProductOption(): array
    {
        return $this->ResponseProductOption;
    }

    public function setResponseProductOption(array $ResponseProductOption): static
    {
        $this->ResponseProductOption = $ResponseProductOption;

        return $this;
    }
}
