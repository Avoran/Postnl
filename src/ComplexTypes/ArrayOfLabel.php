<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfLabel extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'Label';

    protected array $Label;

    public function __construct(array $Label)
    {
        $this->setLabel($Label);
    }

    public function getLabel(): array
    {
        return $this->Label;
    }

    public function setLabel(array $Label): static
    {
        $this->Label = $Label;

        return $this;
    }
}
