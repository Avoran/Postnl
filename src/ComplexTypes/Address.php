<?php

namespace DivideBV\Postnl\ComplexTypes;

class Address extends BaseType
{
    protected string $AddressType;

    protected string $City;

    protected string $CompanyName;

    protected string $Countrycode;

    protected string $FirstName;

    protected string $HouseNr;

    protected string $HouseNrExt;

    protected string $Name;

    protected string $Street;

    protected string $Zipcode;

    protected ?string $Area = null;

    protected ?string $Buildingname = null;

    protected ?string $Department = null;

    protected ?string $Doorcode = null;

    protected ?string $Floor = null;

    protected ?string $Region = null;

    protected ?string $Remark = null;

    protected ?string $StreetHouseNrExt = null;

    public function __construct(
        string $AddressType,
        string $FirstName,
        string $Name,
        string $CompanyName,
        string $Street,
        string $HouseNr,
        string $HouseNrExt,
        string $Zipcode,
        string $City,
        string $Countrycode,
        ?string $Area = null,
        ?string $Buildingname = null,
        ?string $Department = null,
        ?string $Doorcode = null,
        ?string $Floor = null,
        ?string $Region = null,
        ?string $Remark = null
    ) {
        $this->setAddressType($AddressType);
        $this->setFirstName($FirstName);
        $this->setName($Name);
        $this->setCompanyName($CompanyName);
        $this->setStreet($Street);
        $this->setHouseNr($HouseNr);
        $this->setHouseNrExt($HouseNrExt);
        $this->setZipcode($Zipcode);
        $this->setCity($City);
        $this->setCountrycode($Countrycode);

        // Optional parameters.
        $this->setArea($Area);
        $this->setBuildingname($Buildingname);
        $this->setDepartment($Department);
        $this->setDoorcode($Doorcode);
        $this->setFloor($Floor);
        $this->setRegion($Region);
        $this->setRemark($Remark);
    }

    public function getAddressType(): string
    {
        return $this->AddressType;
    }

    public function setAddressType(string $AddressType): static
    {
        $this->AddressType = $AddressType;

        return $this;
    }

    public function getFirstName(): string
    {
        return $this->FirstName;
    }

    public function setFirstName(string $FirstName): static
    {
        $this->FirstName = $FirstName;

        return $this;
    }

    public function getName(): string
    {
        return $this->Name;
    }

    public function setName(string $Name): static
    {
        $this->Name = $Name;

        return $this;
    }

    public function getCompanyName(): string
    {
        return $this->CompanyName;
    }

    public function setCompanyName(string $CompanyName): static
    {
        $this->CompanyName = $CompanyName;

        return $this;
    }

    public function getStreetHouseNrExt(): ?string
    {
        return $this->StreetHouseNrExt;
    }

    /**
     * Combination of Street, HouseNr and HouseNrExt.
     *
     * The PostNL webservice will calculate a split of street name, house number
     * and extension for you, and will afterwards use the split values. This
     * might result in incorrect behavior for which PostNL can’t be held liable.
     *
     * Important:
     * - The conversion is only made for NL, BE and DE addresses.
     * - Use separate fields (street, houseNr and extension) when possible.
     */
    public function setStreetHouseNrExt(string $streetHouseNrExt): static
    {
        $this->StreetHouseNrExt = $streetHouseNrExt;

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

    public function getZipcode(): string
    {
        return $this->Zipcode;
    }

    public function setZipcode(string $Zipcode): static
    {
        $this->Zipcode = $Zipcode;

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

    public function getCountrycode(): string
    {
        return $this->Countrycode;
    }

    public function setCountrycode(string $Countrycode): static
    {
        $this->Countrycode = $Countrycode;

        return $this;
    }

    public function getArea(): ?string
    {
        return $this->Area;
    }

    public function setArea(?string $Area): static
    {
        $this->Area = $Area;

        return $this;
    }

    public function getBuildingname(): ?string
    {
        return $this->Buildingname;
    }

    public function setBuildingname(?string $Buildingname): static
    {
        $this->Buildingname = $Buildingname;

        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->Department;
    }

    public function setDepartment(?string $Department): static
    {
        $this->Department = $Department;

        return $this;
    }

    public function getDoorcode(): ?string
    {
        return $this->Doorcode;
    }

    public function setDoorcode(?string $Doorcode): static
    {
        $this->Doorcode = $Doorcode;

        return $this;
    }

    public function getFloor(): ?string
    {
        return $this->Floor;
    }

    public function setFloor(?string $Floor): static
    {
        $this->Floor = $Floor;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->Region;
    }

    public function setRegion(?string $Region): static
    {
        $this->Region = $Region;

        return $this;
    }

    public function getRemark(): ?string
    {
        return $this->Remark;
    }

    public function setRemark(?string $Remark): static
    {
        $this->Remark = $Remark;

        return $this;
    }
}
