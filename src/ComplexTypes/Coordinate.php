<?php

namespace DivideBV\Postnl\ComplexTypes;

class Coordinate extends BaseType
{
    protected ?string $Latitude = null;

    protected ?string $Longitude = null;

    public function __construct(string $Latitude, string $Longitude)
    {
        $this->setLatitude($Latitude);
        $this->setLongitude($Longitude);
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

    public function getLongitude(): ?string
    {
        return $this->Longitude;
    }

    public function setLongitude(string $Longitude): static
    {
        $this->Longitude = $Longitude;

        return $this;
    }
}
