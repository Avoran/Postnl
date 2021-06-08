<?php

namespace DivideBV\Postnl\ComplexTypes;

class RequestShipment extends BaseType
{
    protected ?string $Barcode = null;

    protected ?string $Reference = null;

    protected ?string $Zipcode = null;

    public function __construct(string $Barcode, ?string $Reference = null, ?string $Zipcode = null)
    {
        $this->setBarcode($Barcode);
        $this->setReference($Reference);
        $this->setZipcode($Zipcode);
    }

    public function getBarcode(): ?string
    {
        return $this->Barcode;
    }

    public function setBarcode(string $Barcode): static
    {
        $this->Barcode = $Barcode;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->Reference;
    }

    public function setReference(?string $Reference): static
    {
        $this->Reference = $Reference;

        return $this;
    }

    public function getZipcode(): ?string
    {
        return $this->Zipcode;
    }

    public function setZipcode(?string $Zipcode): static
    {
        $this->Zipcode = $Zipcode;

        return $this;
    }
}
