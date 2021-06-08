<?php

namespace DivideBV\Postnl\ComplexTypes;

class GetTimeframesResponse extends BaseType
{
    protected ArrayOfReasonNoTimeframe $ReasonNoTimeframes;

    protected ArrayOfTimeframe $Timeframes;

    public function __construct(ArrayOfReasonNoTimeframe $ReasonNoTimeframes, ArrayOfTimeframe $Timeframes)
    {
        $this->setReasonNoTimeframes($ReasonNoTimeframes);
        $this->setTimeframes($Timeframes);
    }

    public function getReasonNoTimeframes(): ArrayOfReasonNoTimeframe
    {
        return $this->ReasonNoTimeframes;
    }

    public function setReasonNoTimeframes(ArrayOfReasonNoTimeframe $ReasonNoTimeframes): static
    {
        $this->ReasonNoTimeframes = $ReasonNoTimeframes;

        return $this;
    }

    public function getTimeframes(): ArrayOfTimeframe
    {
        return $this->Timeframes;
    }

    public function setTimeframes(ArrayOfTimeframe $Timeframes): static
    {
        $this->Timeframes = $Timeframes;

        return $this;
    }
}
