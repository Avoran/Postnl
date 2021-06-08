<?php

namespace DivideBV\Postnl\ComplexTypes;

class ConfirmingResponseShipment extends BaseType
{
    protected ?string $Barcode = null;

    protected ArrayOfWarning $Warnings;

    public function __construct(string $Barcode, ArrayOfWarning $Warnings)
    {
        $this->setBarcode($Barcode);
        $this->setWarnings($Warnings);
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

    public function getWarnings(): ArrayOfWarning
    {
        return $this->Warnings;
    }

    public function setWarnings(ArrayOfWarning $Warnings): static
    {
        $this->Warnings = $Warnings;

        return $this;
    }
}
