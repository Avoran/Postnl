<?php

namespace DivideBV\Postnl\ComplexTypes;

use DateTime;

class GetSignatureResponseSignature extends BaseType
{
    protected string $Barcode;

    protected DateTime $SignatureDate;

    protected string $SignatureImage;

    public function __construct(string $Barcode, DateTime $SignatureDate, string $SignatureImage)
    {
        $this->setBarcode($Barcode);
        $this->setSignatureDate($SignatureDate);
        $this->setSignatureImage($SignatureImage);
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

    public function getSignatureDate(): DateTime
    {
        return $this->SignatureDate;
    }

    public function setSignatureDate(DateTime $SignatureDate): static
    {
        $this->SignatureDate = $SignatureDate;

        return $this;
    }

    public function getSignatureImage(): string
    {
        return $this->SignatureImage;
    }

    public function setSignatureImage(string $SignatureImage): static
    {
        $this->SignatureImage = $SignatureImage;

        return $this;
    }
}
