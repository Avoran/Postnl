<?php

namespace DivideBV\Postnl\ComplexTypes;

class CutOffTime extends BaseType
{
    protected string $Day;

    protected string $Time;

    public function __construct(string $Day, string $Time)
    {
        $this->setDay($Day);
        $this->setTime($Time);
    }

    public function getDay(): string
    {
        return $this->Day;
    }

    public function setDay(string $Day): static
    {
        $this->Day = $Day;

        return $this;
    }

    public function getTime(): string
    {
        return $this->Time;
    }

    public function setTime(string $Time): static
    {
        $this->Time = $Time;

        return $this;
    }
}
