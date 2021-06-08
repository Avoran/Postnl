<?php

namespace DivideBV\Postnl\ComplexTypes;

class Timeframe extends BaseType
{
    protected string $Date;

    protected ArrayOfTimeframeTimeFrame $Timeframes;

    public function __construct(string $Date, ArrayOfTimeframeTimeFrame $Timeframes)
    {
        $this->setDate($Date);
        $this->setTimeframes($Timeframes);
    }

    public function getDate(): string
    {
        return $this->Date;
    }

    public function setDate(string $Date): static
    {
        $this->Date = $Date;

        return $this;
    }

    public function getTimeframes(): ArrayOfTimeframeTimeFrame
    {
        return $this->Timeframes;
    }

    public function setTimeframes(ArrayOfTimeframeTimeFrame $Timeframes): static
    {
        $this->Timeframes = $Timeframes;

        return $this;
    }
}
