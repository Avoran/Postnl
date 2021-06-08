<?php

namespace DivideBV\Postnl\ComplexTypes;

class RequestCustomer extends BaseType
{
    protected string $CustomerCode;

    protected string $CustomerNumber;

    public function __construct(string $CustomerCode, string $CustomerNumber)
    {
        $this->setCustomerCode($CustomerCode);
        $this->setCustomerNumber($CustomerNumber);
    }

    public function getCustomerCode(): string
    {
        return $this->CustomerCode;
    }

    public function setCustomerCode(string $CustomerCode): static
    {
        $this->CustomerCode = $CustomerCode;

        return $this;
    }

    public function getCustomerNumber(): string
    {
        return $this->CustomerNumber;
    }

    public function setCustomerNumber(string $CustomerNumber): static
    {
        $this->CustomerNumber = $CustomerNumber;

        return $this;
    }
}
