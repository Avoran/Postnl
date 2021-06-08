<?php

namespace DivideBV\Postnl\ComplexTypes;

class Content extends BaseType
{
    protected ?string $CountryOfOrigin = null;

    protected ?string $Description = null;

    protected ?string $HSTariffNr = null;

    protected ?string $Quantity = null;

    protected ?string $Value = null;

    protected ?string $Weight = null;

    public function __construct(
        string $CountryOfOrigin,
        string $Description,
        string $HSTariffNr,
        string $Quantity,
        string $Value,
        string $Weight
    ) {
        $this->setCountryOfOrigin($CountryOfOrigin);
        $this->setDescription($Description);
        $this->setHSTariffNr($HSTariffNr);
        $this->setQuantity($Quantity);
        $this->setValue($Value);
        $this->setWeight($Weight);
    }

    public function getCountryOfOrigin(): string
    {
        return $this->CountryOfOrigin;
    }

    public function setCountryOfOrigin(string $CountryOfOrigin): static
    {
        $this->CountryOfOrigin = $CountryOfOrigin;

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

    public function getHSTariffNr(): string
    {
        return $this->HSTariffNr;
    }

    protected function setHSTariffNr(string $HSTariffNr): static
    {
        $this->HSTariffNr = $HSTariffNr;

        return $this;
    }

    public function getQuantity(): string
    {
        return $this->Quantity;
    }

    public function setQuantity(string $Quantity): static
    {
        $this->Quantity = $Quantity;

        return $this;
    }

    public function getValue(): string
    {
        return $this->Value;
    }

    public function setValue(string $Value): static
    {
        $this->Value = $Value;

        return $this;
    }

    public function getWeight(): string
    {
        return $this->Weight;
    }

    public function setWeight(string $Weight): static
    {
        $this->Weight = $Weight;

        return $this;
    }
}
