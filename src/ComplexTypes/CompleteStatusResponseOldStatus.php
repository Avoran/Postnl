<?php

namespace DivideBV\Postnl\ComplexTypes;

class CompleteStatusResponseOldStatus extends BaseType
{
    protected string $Code;

    protected string $Description;

    protected string $PhaseCode;

    protected string $PhaseDescription;

    protected string $TimeStamp;

    public function __construct(
        string $Code,
        string $Description,
        string $PhaseCode,
        string $PhaseDescription,
        string $TimeStamp
    ) {
        $this->setCode($Code);
        $this->setDescription($Description);
        $this->setPhaseCode($PhaseCode);
        $this->setPhaseDescription($PhaseDescription);
        $this->setTimeStamp($TimeStamp);
    }

    public function getCode(): string
    {
        return $this->Code;
    }

    public function setCode(string $Code): static
    {
        $this->Code = $Code;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
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

    public function getPhaseDescription(): string
    {
        return $this->PhaseDescription;
    }

    public function setPhaseDescription(string $PhaseDescription): static
    {
        $this->PhaseDescription = $PhaseDescription;

        return $this;
    }

    public function getTimeStamp(): string
    {
        return $this->TimeStamp;
    }

    public function setTimeStamp(string $TimeStamp): static
    {
        $this->TimeStamp = $TimeStamp;

        return $this;
    }
}
