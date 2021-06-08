<?php

namespace DivideBV\Postnl\ComplexTypes;

class ResponseCustomer extends BaseType
{
    protected ?string $CustomerCode = null;

    protected ?string $CustomerNumber = null;

    protected ?string $Name = null;

    public function __construct(string $CustomerCode, string $CustomerNumber, string $Name)
    {
        $this->setCustomerCode($CustomerCode);
        $this->setCustomerNumber($CustomerNumber);
        $this->setName($Name);
    }

    public function getCustomerCode(): ?string
    {
        return $this->CustomerCode;
    }

    public function setCustomerCode(string $CustomerCode): static
    {
        $this->CustomerCode = $CustomerCode;

        return $this;
    }

    public function getCustomerNumber(): ?string
    {
        return $this->CustomerNumber;
    }

    public function setCustomerNumber(string $CustomerNumber): static
    {
        $this->CustomerNumber = $CustomerNumber;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): static
    {
        $this->Name = $Name;

        return $this;
    }
}
