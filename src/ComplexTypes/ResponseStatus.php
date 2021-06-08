<?php

namespace DivideBV\Postnl\ComplexTypes;

class ResponseStatus extends BaseType
{
    protected ?string $CurrentPhaseCode = null;

    protected ?string $CurrentPhaseDescription = null;

    protected ?string $CurrentStatusCode = null;

    protected ?string $CurrentStatusDescription = null;

    protected ?string $CurrentStatusTimeStamp = null;

    public function __construct(
        string $CurrentPhaseCode,
        string $CurrentPhaseDescription,
        string $CurrentStatusCode,
        string $CurrentStatusDescription,
        string $CurrentStatusTimeStamp
    ) {
        $this->setCurrentPhaseCode($CurrentPhaseCode);
        $this->setCurrentPhaseDescription($CurrentPhaseDescription);
        $this->setCurrentStatusCode($CurrentStatusCode);
        $this->setCurrentStatusDescription($CurrentStatusDescription);
        $this->setCurrentStatusTimeStamp($CurrentStatusTimeStamp);
    }

    public function getCurrentPhaseCode(): ?string
    {
        return $this->CurrentPhaseCode;
    }

    public function setCurrentPhaseCode(string $CurrentPhaseCode): static
    {
        $this->CurrentPhaseCode = $CurrentPhaseCode;

        return $this;
    }

    public function getCurrentPhaseDescription(): ?string
    {
        return $this->CurrentPhaseDescription;
    }

    public function setCurrentPhaseDescription(string $CurrentPhaseDescription): static
    {
        $this->CurrentPhaseDescription = $CurrentPhaseDescription;

        return $this;
    }

    public function getCurrentStatusCode(): ?string
    {
        return $this->CurrentStatusCode;
    }

    public function setCurrentStatusCode(string $CurrentStatusCode): static
    {
        $this->CurrentStatusCode = $CurrentStatusCode;

        return $this;
    }

    public function getCurrentStatusDescription(): ?string
    {
        return $this->CurrentStatusDescription;
    }

    public function setCurrentStatusDescription(string $CurrentStatusDescription): static
    {
        $this->CurrentStatusDescription = $CurrentStatusDescription;

        return $this;
    }

    public function getCurrentStatusTimeStamp(): ?string
    {
        return $this->CurrentStatusTimeStamp;
    }

    public function setCurrentStatusTimeStamp(string $CurrentStatusTimeStamp): static
    {
        $this->CurrentStatusTimeStamp = $CurrentStatusTimeStamp;

        return $this;
    }
}
