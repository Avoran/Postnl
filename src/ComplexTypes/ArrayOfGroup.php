<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfGroup extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'Group';

    protected array $Group;

    public function __construct(array $Group)
    {
        $this->setGroup($Group);
    }

    public function getGroup(): array
    {
        return $this->Group;
    }

    public function setGroup(array $Group): static
    {
        $this->Group = $Group;

        return $this;
    }
}
