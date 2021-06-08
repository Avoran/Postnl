<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfTimeframe extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'Timeframe';

    protected array $Timeframe;

    public function __construct(array $Timeframe)
    {
        $this->setTimeframe($Timeframe);
    }

    public function getTimeframe(): array
    {
        return $this->Timeframe;
    }

    public function setTimeframe(array $Timeframe): static
    {
        $this->Timeframe = $Timeframe;

        return $this;
    }
}
