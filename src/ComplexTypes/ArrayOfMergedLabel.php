<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfMergedLabel extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'MergedLabel';

    protected array $MergedLabel;

    public function __construct(array $MergedLabel)
    {
        $this->setMergedLabel($MergedLabel);
    }

    public function getMergedLabel(): array
    {
        return $this->MergedLabel;
    }

    public function setMergedLabel(array $MergedLabel): static
    {
        $this->MergedLabel = $MergedLabel;

        return $this;
    }
}
