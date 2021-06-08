<?php

namespace DivideBV\Postnl\ComplexTypes;

class GetNearestLocationsRequest extends BaseType
{
    protected string $Countrycode;

    protected Location $Location;

    protected Message $Message;

    public function __construct(Message $Message, Location $Location, string $Countrycode)
    {
        $this->setMessage($Message);
        $this->setLocation($Location);
        $this->setCountrycode($Countrycode);
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

    public function getLocation(): Location
    {
        return $this->Location;
    }

    public function setLocation(Location $Location): static
    {
        $this->Location = $Location;

        return $this;
    }

    public function getMessage(): Message
    {
        return $this->Message;
    }

    public function setMessage(Message $Message): static
    {
        $this->Message = $Message;

        return $this;
    }
}
