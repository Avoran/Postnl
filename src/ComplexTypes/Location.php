<?php

namespace DivideBV\Postnl\ComplexTypes;

class Location extends BaseLocation
{
    protected ?string $City = null;

    protected ?Coordinate $Coordinates = null;

    protected ?string $HouseNr = null;

    protected ?string $HouseNrExt = null;

    protected ?string $Postalcode = null;

    protected ?string $Street = null;

    public function __construct(
        string $PostalCode,
        string $AllowSundaySorting,
        ?string $DeliveryDate = null,
        array $DeliveryOptions = ['PG'],
        array $Options = ['Daytime'],
        ?Coordinate $Coordinates = null,
        ?string $City = null,
        ?string $Street = null,
        ?string $HouseNr = null,
        ?string $HouseNrExt = null
    ) {
        parent::__construct($AllowSundaySorting, $DeliveryDate, $DeliveryOptions, $Options);
        $this->setPostalcode($PostalCode);
        $this->setCoordinates($Coordinates);
        $this->setCity($City);
        $this->setStreet($Street);
        $this->setHouseNr($HouseNr);
        $this->setHouseNrExt($HouseNrExt);
    }

    public function getCity(): ?string
    {
        return $this->City;
    }

    public function setCity(?string $City): static
    {
        $this->City = $City;

        return $this;
    }

    public function getCoordinates(): ?Coordinate
    {
        return $this->Coordinates;
    }

    public function setCoordinates(?Coordinate $Coordinates): static
    {
        $this->Coordinates = $Coordinates;

        return $this;
    }

    public function getHouseNr(): ?string
    {
        return $this->HouseNr;
    }

    public function setHouseNr(?string $HouseNr): static
    {
        $this->HouseNr = $HouseNr;

        return $this;
    }

    public function getHouseNrExt(): ?string
    {
        return $this->HouseNrExt;
    }

    public function setHouseNrExt(?string $HouseNrExt): static
    {
        $this->HouseNrExt = $HouseNrExt;

        return $this;
    }

    public function getPostalcode(): ?string
    {
        return $this->Postalcode;
    }

    public function setPostalcode(string $Postalcode): static
    {
        $this->Postalcode = $Postalcode;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->Street;
    }

    public function setStreet(?string $Street): static
    {
        $this->Street = $Street;

        return $this;
    }
}
