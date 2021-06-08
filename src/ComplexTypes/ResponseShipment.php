<?php

namespace DivideBV\Postnl\ComplexTypes;

class ResponseShipment extends BaseType
{
    protected ?string $Barcode = null;

    protected ?string $DownPartnerBarcode = null;

    protected ?string $DownPartnerID = null;

    protected ?string $DownPartnerLocation = null;

    protected ArrayOfLabel $Labels;

    protected ?string $ProductCodeDelivery = null;

    protected ArrayOfWarning $Warnings;

    public function __construct(
        string $Barcode,
        string $DownPartnerBarcode,
        string $DownPartnerID,
        string $DownPartnerLocation,
        ArrayOfLabel $Labels,
        string $ProductCodeDelivery,
        ArrayOfWarning $Warnings
    ) {
        $this->setBarcode($Barcode);
        $this->setDownPartnerBarcode($DownPartnerBarcode);
        $this->setDownPartnerID($DownPartnerID);
        $this->setDownPartnerLocation($DownPartnerLocation);
        $this->setLabels($Labels);
        $this->setProductCodeDelivery($ProductCodeDelivery);
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

    public function getDownPartnerBarcode(): ?string
    {
        return $this->DownPartnerBarcode;
    }

    public function setDownPartnerBarcode(string $DownPartnerBarcode): static
    {
        $this->DownPartnerBarcode = $DownPartnerBarcode;

        return $this;
    }

    public function getDownPartnerID(): ?string
    {
        return $this->DownPartnerID;
    }

    public function setDownPartnerID(string $DownPartnerID): static
    {
        $this->DownPartnerID = $DownPartnerID;

        return $this;
    }

    public function getDownPartnerLocation(): ?string
    {
        return $this->DownPartnerLocation;
    }

    public function setDownPartnerLocation(string $DownPartnerLocation): static
    {
        $this->DownPartnerLocation = $DownPartnerLocation;

        return $this;
    }

    public function getLabels(): ArrayOfLabel
    {
        return $this->Labels;
    }

    public function setLabels(ArrayOfLabel $Labels): static
    {
        $this->Labels = $Labels;

        return $this;
    }

    public function getProductCodeDelivery(): ?string
    {
        return $this->ProductCodeDelivery;
    }

    public function setProductCodeDelivery(string $ProductCodeDelivery): static
    {
        $this->ProductCodeDelivery = $ProductCodeDelivery;

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
