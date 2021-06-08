<?php

namespace DivideBV\Postnl\ComplexTypes;

class Customer extends BaseType
{
    protected string $CustomerNumber;

    protected string $CustomerCode;

    protected string $CollectionLocation;

    protected ?string $ContactPerson = null;

    protected ?string $Email = null;

    protected ?string $Name = null;

    protected ?Address $Address = null;

    public function __construct(
        string $CustomerNumber,
        string $CustomerCode,
        string $CollectionLocation,
        ?string $ContactPerson = null,
        ?string $Email = null,
        ?string $Name = null,
        ?Address $Address = null
    ) {
        $this->setCustomerNumber($CustomerNumber);
        $this->setCustomerCode($CustomerCode);
        $this->setCollectionLocation($CollectionLocation);
        $this->setContactPerson($ContactPerson);
        $this->setEmail($Email);
        $this->setName($Name);
        $this->setAddress($Address);
    }

    public function getAddress(): ?Address
    {
        return $this->Address;
    }

    public function setAddress(?Address $Address): static
    {
        $this->Address = $Address;

        return $this;
    }

    public function getCollectionLocation(): string
    {
        return $this->CollectionLocation;
    }

    public function setCollectionLocation(string $CollectionLocation): static
    {
        $this->CollectionLocation = $CollectionLocation;

        return $this;
    }

    public function getContactPerson(): ?string
    {
        return $this->ContactPerson;
    }

    public function setContactPerson(?string $ContactPerson): static
    {
        $this->ContactPerson = $ContactPerson;

        return $this;
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

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(?string $Email): static
    {
        $this->Email = $Email;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(?string $Name): static
    {
        $this->Name = $Name;

        return $this;
    }
}
