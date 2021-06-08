<?php

namespace DivideBV\Postnl\ComplexTypes;

use DateTime;

class TimeframeRequest extends BaseType
{
    protected string $City;

    protected string $CountryCode;

    protected string $EndDate;

    protected string $HouseNr;

    protected string $HouseNrExt;

    protected array $Options;

    protected string $PostalCode;

    protected string $StartDate;

    protected string $Street;

    protected string $SundaySorting;

    public function __construct(
        string $Postalcode,
        string $HouseNr,
        array $Options,
        ?string $StartDate,
        ?string $EndDate,
        string $CountryCode,
        string $SundaySorting
    ) {
        $this->setStartDate($StartDate ?: (new DateTime())->format('d-m-Y'));
        $this->setEndDate($EndDate ?: (new DateTime('+1 week'))->format('d-m-Y'));
        $this->setPostalCode($Postalcode);
        $this->setOptions($Options);
        $this->setHouseNr($HouseNr);
        $this->setCountryCode($CountryCode);
        $this->setSundaySorting($SundaySorting);
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

    public function getEndDate(): string
    {
        return $this->EndDate;
    }

    public function setEndDate(string $EndDate): static
    {
        $this->EndDate = $EndDate;

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

    public function getStartDate(): string
    {
        return $this->StartDate;
    }

    public function setStartDate(string $StartDate): static
    {
        $this->StartDate = $StartDate;

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

    public function getSundaySorting(): string
    {
        return $this->SundaySorting;
    }

    public function setSundaySorting(string $SundaySorting): static
    {
        $this->SundaySorting = $SundaySorting;

        return $this;
    }
}
