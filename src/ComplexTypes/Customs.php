<?php

namespace DivideBV\Postnl\ComplexTypes;

class Customs extends BaseType
{
    protected ?string $Certificate = null;

    protected ?string $CertificateNr = null;

    protected ArrayOfContent $Content;

    protected ?string $Currency = null;

    protected ?string $HandleAsNonDeliverable = null;

    protected ?string $Invoice = null;

    protected ?string $InvoiceNr = null;

    protected ?string $License = null;

    protected ?string $LicenseNr = null;

    protected ?string $ShipmentType = null;

    public function __construct(
        string $Certificate,
        string $CertificateNr,
        ArrayOfContent $Content,
        string $Currency,
        string $HandleAsNonDeliverable,
        string $Invoice,
        string $InvoiceNr,
        string $License,
        string $LicenseNr,
        string $ShipmentType
    ) {
        $this->setCertificate($Certificate);
        $this->setCertificateNr($CertificateNr);
        $this->setContent($Content);
        $this->setCurrency($Currency);
        $this->setHandleAsNonDeliverable($HandleAsNonDeliverable);
        $this->setInvoice($Invoice);
        $this->setInvoiceNr($InvoiceNr);
        $this->setLicense($License);
        $this->setLicenseNr($LicenseNr);
        $this->setShipmentType($ShipmentType);
    }

    public function getCertificate(): ?string
    {
        return $this->Certificate;
    }

    public function setCertificate(string $Certificate): static
    {
        $this->Certificate = $Certificate;

        return $this;
    }

    public function getCertificateNr(): ?string
    {
        return $this->CertificateNr;
    }

    public function setCertificateNr(string $CertificateNr): static
    {
        $this->CertificateNr = $CertificateNr;

        return $this;
    }

    public function getContent(): ArrayOfContent
    {
        return $this->Content;
    }

    public function setContent(ArrayOfContent $Content): static
    {
        $this->Content = $Content;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    public function setCurrency(string $Currency): static
    {
        $this->Currency = $Currency;

        return $this;
    }

    public function getHandleAsNonDeliverable(): ?string
    {
        return $this->HandleAsNonDeliverable;
    }

    public function setHandleAsNonDeliverable(string $HandleAsNonDeliverable): static
    {
        $this->HandleAsNonDeliverable = $HandleAsNonDeliverable;

        return $this;
    }

    public function getInvoice(): ?string
    {
        return $this->Invoice;
    }

    public function setInvoice(string $Invoice): static
    {
        $this->Invoice = $Invoice;

        return $this;
    }

    public function getInvoiceNr(): ?string
    {
        return $this->InvoiceNr;
    }

    public function setInvoiceNr(string $InvoiceNr): static
    {
        $this->InvoiceNr = $InvoiceNr;

        return $this;
    }

    public function getLicense(): ?string
    {
        return $this->License;
    }

    public function setLicense(string $License): static
    {
        $this->License = $License;

        return $this;
    }

    public function getLicenseNr(): ?string
    {
        return $this->LicenseNr;
    }

    public function setLicenseNr(string $LicenseNr): static
    {
        $this->LicenseNr = $LicenseNr;

        return $this;
    }

    public function getShipmentType(): ?string
    {
        return $this->ShipmentType;
    }

    public function setShipmentType(string $ShipmentType): static
    {
        $this->ShipmentType = $ShipmentType;

        return $this;
    }
}
