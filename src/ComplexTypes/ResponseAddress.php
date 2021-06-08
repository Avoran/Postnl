<?php

namespace DivideBV\Postnl\ComplexTypes;

class ResponseAddress extends BaseType
{
    protected string $AddressType;

    protected string $Building;

    protected string $City;

    protected string $CompanyName;

    protected string $CountryCode;

    protected string $DepartmentName;

    protected string $District;

    protected string $DoorCode;

    protected string $FirstName;

    protected string $Floor;

    protected string $HouseNumber;

    protected string $HouseNumberSuffix;

    protected string $LastName;

    protected string $Region;

    protected string $RegistrationDate;

    protected string $Remark;

    protected string $Street;

    protected string $Zipcode;

    public function __construct(
        string $AddressType,
        string $Building,
        string $City,
        string $CompanyName,
        string $CountryCode,
        string $DepartmentName,
        string $District,
        string $DoorCode,
        string $FirstName,
        string $Floor,
        string $HouseNumber,
        string $HouseNumberSuffix,
        string $LastName,
        string $Region,
        string $RegistrationDate,
        string $Remark,
        string $Street,
        string $Zipcode
    ) {
        $this->setAddressType($AddressType);
        $this->setBuilding($Building);
        $this->setCity($City);
        $this->setCompanyName($CompanyName);
        $this->setCountryCode($CountryCode);
        $this->setDepartmentName($DepartmentName);
        $this->setDistrict($District);
        $this->setDoorCode($DoorCode);
        $this->setFirstName($FirstName);
        $this->setFloor($Floor);
        $this->setHouseNumber($HouseNumber);
        $this->setHouseNumberSuffix($HouseNumberSuffix);
        $this->setLastName($LastName);
        $this->setRegion($Region);
        $this->setRegistrationDate($RegistrationDate);
        $this->setRemark($Remark);
        $this->setStreet($Street);
        $this->setZipcode($Zipcode);
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

    public function getBuilding(): string
    {
        return $this->Building;
    }

    public function setBuilding(string $Building): static
    {
        $this->Building = $Building;

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

    public function getCompanyName(): string
    {
        return $this->CompanyName;
    }

    public function setCompanyName(string $CompanyName): static
    {
        $this->CompanyName = $CompanyName;

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

    public function getDepartmentName(): string
    {
        return $this->DepartmentName;
    }

    public function setDepartmentName(string $DepartmentName): static
    {
        $this->DepartmentName = $DepartmentName;

        return $this;
    }

    public function getDistrict(): string
    {
        return $this->District;
    }

    public function setDistrict(string $District): static
    {
        $this->District = $District;

        return $this;
    }

    public function getDoorCode(): string
    {
        return $this->DoorCode;
    }

    public function setDoorCode(string $DoorCode): static
    {
        $this->DoorCode = $DoorCode;

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

    public function getFloor(): string
    {
        return $this->Floor;
    }

    public function setFloor(string $Floor): static
    {
        $this->Floor = $Floor;

        return $this;
    }

    public function getHouseNumber(): string
    {
        return $this->HouseNumber;
    }

    public function setHouseNumber(string $HouseNumber): static
    {
        $this->HouseNumber = $HouseNumber;

        return $this;
    }

    public function getHouseNumberSuffix(): string
    {
        return $this->HouseNumberSuffix;
    }

    public function setHouseNumberSuffix(string $HouseNumberSuffix): static
    {
        $this->HouseNumberSuffix = $HouseNumberSuffix;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->LastName;
    }

    public function setLastName(string $LastName): static
    {
        $this->LastName = $LastName;

        return $this;
    }

    public function getRegion(): string
    {
        return $this->Region;
    }

    public function setRegion(string $Region): static
    {
        $this->Region = $Region;

        return $this;
    }

    public function getRegistrationDate(): string
    {
        return $this->RegistrationDate;
    }

    public function setRegistrationDate(string $RegistrationDate): static
    {
        $this->RegistrationDate = $RegistrationDate;

        return $this;
    }

    public function getRemark(): string
    {
        return $this->Remark;
    }

    public function setRemark(string $Remark): static
    {
        $this->Remark = $Remark;

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

    public function getZipcode(): string
    {
        return $this->Zipcode;
    }

    public function setZipcode(string $Zipcode): static
    {
        $this->Zipcode = $Zipcode;

        return $this;
    }
}
