<?php

namespace DivideBV\Postnl\ComplexTypes;

class GetTimeframesRequest extends BaseType
{
    protected Message $Message;

    protected TimeframeRequest $Timeframe;

    public function __construct(Message $Message, TimeframeRequest $Timeframe)
    {
        $this->setMessage($Message);
        $this->setTimeframe($Timeframe);
    }

    public function getMessage(): Message
    {
        return $this->Message;
    }

    public function setMessage(Message $Message)
    {
        $this->Message = $Message;
    }

    public function getTimeframe(): TimeframeRequest
    {
        return $this->Timeframe;
    }

    public function setTimeframe(TimeframeRequest $Timeframe)
    {
        $this->Timeframe = $Timeframe;
    }
}
