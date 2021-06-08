<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfWarning extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'Warning';

    protected array $Warning;

    public function __construct(array $Warning)
    {
        $this->setWarning($Warning);
    }

    public function getWarning(): array
    {
        return $this->Warning;
    }

    public function setWarning(array $Warning): static
    {
        $this->Warning = $Warning;

        return $this;
    }
}
