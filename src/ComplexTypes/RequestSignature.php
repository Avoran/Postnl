<?php

namespace DivideBV\Postnl\ComplexTypes;

class RequestSignature extends BaseType
{
    protected string $Barcode;

    public function __construct(string $Barcode)
    {
        $this->setBarcode($Barcode);
    }

    public function getBarcode(): string
    {
        return $this->Barcode;
    }

    public function setBarcode(string $Barcode): static
    {
        $this->Barcode = $Barcode;

        return $this;
    }
}
