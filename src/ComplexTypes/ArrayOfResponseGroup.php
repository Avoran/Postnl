<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfResponseGroup extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'ResponseGroup';

    protected array $ResponseGroup;

    public function __construct(array $ResponseGroup)
    {
        $this->setResponseGroup($ResponseGroup);
    }

    public function getResponseGroup(): array
    {
        return $this->ResponseGroup;
    }

    public function setResponseGroup(array $ResponseGroup): static
    {
        $this->ResponseGroup = $ResponseGroup;

        return $this;
    }
}
