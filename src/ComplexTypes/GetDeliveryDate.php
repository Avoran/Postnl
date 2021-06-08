<?php

namespace DivideBV\Postnl\ComplexTypes;

class GetDeliveryDate extends BaseType
{
    protected string $AllowSundaySorting;

    protected string $City;

    protected string $CountryCode;

    protected ArrayOfCutOffTime $CutOffTimes;

    protected string $HouseNr;

    protected string $HouseNrExt;

    protected array $Options;

    protected string $PostalCode;

    protected string $ShippingDate;

    protected string $ShippingDuration;

    protected string $Street;

    public function __construct(
        string $AllowSundaySorting,
        string $City,
        string $CountryCode,
        ArrayOfCutOffTime $CutOffTimes,
        string $HouseNr,
        string $HouseNrExt,
        array $Options,
        string $PostalCode,
        string $ShippingDate,
        string $ShippingDuration,
        string $Street
    ) {
        $this->setAllowSundaySorting($AllowSundaySorting);
        $this->setCity($City);
        $this->setCountryCode($CountryCode);
        $this->setCutOffTimes($CutOffTimes);
        $this->setHouseNr($HouseNr);
        $this->setHouseNrExt($HouseNrExt);
        $this->setOptions($Options);
        $this->setPostalCode($PostalCode);
        $this->setShippingDate($ShippingDate);
        $this->setShippingDuration($ShippingDuration);
        $this->setStreet($Street);
    }

    public function getAllowSundaySorting(): string
    {
        return $this->AllowSundaySorting;
    }

    public function setAllowSundaySorting(string $AllowSundaySorting): static
    {
        $this->AllowSundaySorting = $AllowSundaySorting;

        return $this;
    }

    public function getCity(): string
    {
        return $this->City;
    }

    public function setCity(string $City): static
    {
        $this->City = $City;

        return $this;
    }

    public function getCountryCode(): string
    {
        return $this->CountryCode;
    }

    public function setCountryCode(string $CountryCode): static
    {
        $this->CountryCode = $CountryCode;

        return $this;
    }

    public function getCutOffTimes(): ArrayOfCutOffTime
    {
        return $this->CutOffTimes;
    }

    public function setCutOffTimes(ArrayOfCutOffTime $CutOffTimes): static
    {
        $this->CutOffTimes = $CutOffTimes;

        return $this;
    }

    public function getHouseNr(): string
    {
        return $this->HouseNr;
    }

    public function setHouseNr(string $HouseNr): static
    {
        $this->HouseNr = $HouseNr;

        return $this;
    }

    public function getHouseNrExt(): string
    {
        return $this->HouseNrExt;
    }

    public function setHouseNrExt(string $HouseNrExt): static
    {
        $this->HouseNrExt = $HouseNrExt;

        return $this;
    }

    public function getOptions(): array
    {
        return $this->Options;
    }

    public function setOptions(array $Options): static
    {
        $this->Options = $Options;

        return $this;
    }

    public function getPostalCode(): string
    {
        return $this->PostalCode;
    }

    public function setPostalCode(string $PostalCode): static
    {
        $this->PostalCode = $PostalCode;

        return $this;
    }

    public function getShippingDate(): string
    {
        return $this->ShippingDate;
    }

    public function setShippingDate(string $ShippingDate): static
    {
        $this->ShippingDate = $ShippingDate;

        return $this;
    }

    public function getShippingDuration(): string
    {
        return $this->ShippingDuration;
    }

    public function setShippingDuration(string $ShippingDuration): static
    {
        $this->ShippingDuration = $ShippingDuration;

        return $this;
    }

    public function getStreet(): string
    {
        return $this->Street;
    }

    public function setStreet(string $Street): static
    {
        $this->Street = $Street;

        return $this;
    }
}
