<?php

namespace DivideBV\Postnl\ComplexTypes;

/**
 * XML namespace: http://postnl.nl/cif/domain/BarcodeWebService/
 */
class GenerateBarcodeResponse extends BaseType
{
    protected ?string $Barcode = null;

    public function __construct(string $Barcode)
    {
        $this->setBarcode($Barcode);
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

    public function __toString()
    {
        return $this->Barcode;
    }
}
