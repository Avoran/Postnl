<?php

namespace DivideBV\Postnl\ComplexTypes;

class GetLocationsInAreaRequest extends BaseType
{
    protected string $Countrycode;

    protected LocationArea $Location;

    protected Message $Message;

    public function __construct(string $Countrycode, LocationArea $Location, Message $Message)
    {
        $this->Countrycode = $Countrycode;
        $this->Location = $Location;
        $this->Message = $Message;
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

    public function getLocation(): LocationArea
    {
        return $this->Location;
    }

    public function setLocation(LocationArea $Location): static
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
