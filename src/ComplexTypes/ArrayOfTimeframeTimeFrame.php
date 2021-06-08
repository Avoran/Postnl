<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfTimeframeTimeFrame extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'TimeframeTimeFrame';

    protected array $TimeframeTimeFrame;

    public function __construct(array $TimeframeTimeframe)
    {
        $this->setTimeframeTimeFrame($TimeframeTimeframe);
    }

    public function getTimeframeTimeFrame(): array
    {
        return $this->TimeframeTimeFrame;
    }

    public function setTimeframeTimeFrame(array $TimeframeTimeFrame): static
    {
        $this->TimeframeTimeFrame = $TimeframeTimeFrame;

        return $this;
    }
}
