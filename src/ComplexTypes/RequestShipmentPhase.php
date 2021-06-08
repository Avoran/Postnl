<?php

namespace DivideBV\Postnl\ComplexTypes;

class RequestShipmentPhase extends BaseType
{
    protected string $PhaseCode;

    protected string $DateFrom;

    protected string $DateTo;

    public function __construct(string $PhaseCode, string $DateFrom, string $DateTo)
    {
        $this->setPhaseCode($PhaseCode);
        $this->setDateFrom($DateFrom);
        $this->setDateTo($DateTo);
    }

    public function getPhaseCode(): string
    {
        return $this->PhaseCode;
    }

    public function setPhaseCode(string $PhaseCode): static
    {
        $this->PhaseCode = $PhaseCode;

        return $this;
    }

    public function getDateFrom(): string
    {
        return $this->DateFrom;
    }

    public function setDateFrom(string $DateFrom): static
    {
        $this->DateFrom = $DateFrom;

        return $this;
    }

    public function getDateTo(): string
    {
        return $this->DateTo;
    }

    public function setDateTo(string $DateTo): static
    {
        $this->DateTo = $DateTo;

        return $this;
    }
}
