<?php

namespace DivideBV\Postnl\ComplexTypes;

class Contact extends BaseType
{
    protected ?string $ContactType = null;

    protected ?string $Email = null;

    protected ?string $SMSNr = null;

    protected ?string $TelNr = null;

    public function __construct(string $ContactType, string $Email, string $SMSNr, string $TelNr)
    {
        $this->setContactType($ContactType);
        $this->setEmail($Email);
        $this->setSMSNr($SMSNr);
        $this->setTelNr($TelNr);
    }

    public function getContactType(): ?string
    {
        return $this->ContactType;
    }

    public function setContactType(string $ContactType): static
    {
        $this->ContactType = $ContactType;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): static
    {
        $this->Email = $Email;

        return $this;
    }

    public function getSMSNr(): ?string
    {
        return $this->SMSNr;
    }

    public function setSMSNr(string $SMSNr): static
    {
        $this->SMSNr = $SMSNr;

        return $this;
    }

    public function getTelNr(): ?string
    {
        return $this->TelNr;
    }

    public function setTelNr(string $TelNr): static
    {
        $this->TelNr = $TelNr;

        return $this;
    }
}
