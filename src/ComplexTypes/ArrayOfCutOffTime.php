<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfCutOffTime extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'CutOffTime';

    protected array $CutOffTime;

    public function __construct(array $CutOffTime)
    {
        $this->setCutOffTime($CutOffTime);
    }

    public function getCutOffTime(): array
    {
        return $this->CutOffTime;
    }

    public function setCutOffTime(array $CutOffTime): static
    {
        $this->CutOffTime = $CutOffTime;

        return $this;
    }
}
