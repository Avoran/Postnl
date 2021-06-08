<?php

namespace DivideBV\Postnl\ComplexTypes;

class ResponseLocation extends BaseType
{
    protected Address $Address;

    protected array $DeliveryOptions;

    protected ?string $Distance = null;

    protected ?string $Latitude = null;

    protected ?string $LocationCode = null;

    protected ?string $Longitude = null;

    protected ?string $Name = null;

    protected OpeningHours $OpeningHours;

    protected ?string $PartnerName = null;

    protected ?string $PhoneNumber = null;

    protected ?string $RetailFormulaName = null;

    protected ?string $RetailNetworkID = null;

    protected ?string $Saleschannel = null;

    protected ?string $TerminalType = null;

    public function __construct(
        Address $Address,
        array $DeliveryOptions,
        string $Distance,
        string $Latitude,
        string $LocationCode,
        string $Longtitude,
        string $Name,
        OpeningHours $OpeningHours,
        string $PartnerName,
        string $PhoneNumber,
        string $RetailFormulaName,
        string $RetailNetworkID,
        string $Saleschannel,
        string $TerminalType
    ) {
        $this->setAddress($Address);
        $this->setDeliveryOptions($DeliveryOptions);
        $this->setDistance($Distance);
        $this->setLatitude($Latitude);
        $this->setLocationCode($LocationCode);
        $this->setLongitude($Longtitude);
        $this->setName($Name);
        $this->setOpeningHours($OpeningHours);
        $this->setPartnerName($PartnerName);
        $this->setPhoneNumber($PhoneNumber);
        $this->setRetailFormulaName($RetailFormulaName);
        $this->setRetailNetworkID($RetailNetworkID);
        $this->setSaleschannel($Saleschannel);
        $this->setTerminalType($TerminalType);
    }

    public function getAddress(): Address
    {
        return $this->Address;
    }

    public function setAddress(Address $Address): static
    {
        $this->Address = $Address;

        return $this;
    }

    public function getDeliveryOptions(): array
    {
        return $this->DeliveryOptions;
    }

    public function setDeliveryOptions(array $DeliveryOptions): static
    {
        $this->DeliveryOptions = $DeliveryOptions;

        return $this;
    }

    public function getDistance(): ?string
    {
        return $this->Distance;
    }

    public function setDistance(string $Distance): static
    {
        $this->Distance = $Distance;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->Latitude;
    }

    public function setLatitude(string $Latitude): static
    {
        $this->Latitude = $Latitude;

        return $this;
    }

    public function getLocationCode(): ?string
    {
        return $this->LocationCode;
    }

    public function setLocationCode(string $LocationCode): static
    {
        $this->LocationCode = $LocationCode;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->Longitude;
    }

    public function setLongitude(string $Longitude): static
    {
        $this->Longitude = $Longitude;

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

    public function getOpeningHours(): OpeningHours
    {
        return $this->OpeningHours;
    }

    public function setOpeningHours(OpeningHours $OpeningHours): static
    {
        $this->OpeningHours = $OpeningHours;

        return $this;
    }

    public function getPartnerName(): ?string
    {
        return $this->PartnerName;
    }

    public function setPartnerName(string $PartnerName): static
    {
        $this->PartnerName = $PartnerName;
        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->PhoneNumber;
    }

    public function setPhoneNumber(string $PhoneNumber): static
    {
        $this->PhoneNumber = $PhoneNumber;

        return $this;
    }

    public function getRetailFormulaName(): ?string
    {
        return $this->RetailFormulaName;
    }

    public function setRetailFormulaName(string $RetailFormulaName): static
    {
        $this->RetailFormulaName = $RetailFormulaName;

        return $this;
    }

    public function getRetailNetworkID(): ?string
    {
        return $this->RetailNetworkID;
    }

    public function setRetailNetworkID(string $RetailNetworkID): static
    {
        $this->RetailNetworkID = $RetailNetworkID;

        return $this;
    }

    public function getSaleschannel(): ?string
    {
        return $this->Saleschannel;
    }

    public function setSaleschannel(string $Saleschannel): static
    {
        $this->Saleschannel = $Saleschannel;

        return $this;
    }

    public function getTerminalType(): ?string
    {
        return $this->TerminalType;
    }

    public function setTerminalType(string $TerminalType): static
    {
        $this->TerminalType = $TerminalType;

        return $this;
    }
}
