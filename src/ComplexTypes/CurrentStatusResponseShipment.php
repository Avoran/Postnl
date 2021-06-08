<?php

namespace DivideBV\Postnl\ComplexTypes;

use DateTime;

class CurrentStatusResponseShipment extends BaseType
{
    protected ArrayOfResponseAddress $Addresses;

    protected ArrayOfResponseAmount $Amounts;

    protected ?string $Barcode = null;

    protected DateTime $DeliveryDate;

    protected ResponseDimension $Dimension;

    protected ResponseExpectation $Expectation;

    protected ArrayOfResponseGroup $Groups;

    protected ?string $ProductCode = null;

    protected ArrayOfResponseProductOption $ProductOptions;

    protected ?string $Reference = null;

    protected ResponseStatus $Status;

    protected ArrayOfWarning $Warnings;

    public function __construct(
        ArrayOfResponseAddress $Addresses,
        ArrayOfResponseAmount $Amounts,
        string $Barcode,
        DateTime $DeliveryDate,
        ResponseDimension $Dimension,
        ResponseExpectation $Expectation,
        ArrayOfResponseGroup $Groups,
        string $ProductCode,
        ArrayOfResponseProductOption $ProductOptions,
        string $Reference,
        ResponseStatus $Status,
        ArrayOfWarning $Warnings
    ) {
        $this->setAddresses($Addresses);
        $this->setAmounts($Amounts);
        $this->setBarcode($Barcode);
        $this->setDeliveryDate($DeliveryDate);
        $this->setDimension($Dimension);
        $this->setExpectation($Expectation);
        $this->setGroups($Groups);
        $this->setProductCode($ProductCode);
        $this->setProductOptions($ProductOptions);
        $this->setReference($Reference);
        $this->setStatus($Status);
        $this->setWarnings($Warnings);
    }

    public function getAddresses(): ArrayOfResponseAddress
    {
        return $this->Addresses;
    }

    public function setAddresses(ArrayOfResponseAddress $Addresses): static
    {
        $this->Addresses = $Addresses;

        return $this;
    }

    public function getAmounts(): ArrayOfResponseAmount
    {
        return $this->Amounts;
    }

    public function setAmounts(ArrayOfResponseAmount $Amounts): static
    {
        $this->Amounts = $Amounts;

        return $this;
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

    public function getDeliveryDate(): DateTime
    {
        return $this->DeliveryDate;
    }

    public function setDeliveryDate(DateTime $DeliveryDate): static
    {
        $this->DeliveryDate = $DeliveryDate;

        return $this;
    }

    public function getDimension(): ResponseDimension
    {
        return $this->Dimension;
    }

    public function setDimension(ResponseDimension $Dimension): static
    {
        $this->Dimension = $Dimension;

        return $this;
    }

    public function getExpectation(): ResponseExpectation
    {
        return $this->Expectation;
    }

    public function setExpectation(ResponseExpectation $Expectation): static
    {
        $this->Expectation = $Expectation;

        return $this;
    }

    public function getGroups(): ArrayOfResponseGroup
    {
        return $this->Groups;
    }

    public function setGroups(ArrayOfResponseGroup $Groups): static
    {
        $this->Groups = $Groups;

        return $this;
    }

    public function getProductCode(): ?string
    {
        return $this->ProductCode;
    }

    public function setProductCode(string $ProductCode): static
    {
        $this->ProductCode = $ProductCode;

        return $this;
    }

    public function getProductOptions(): ArrayOfResponseProductOption
    {
        return $this->ProductOptions;
    }

    public function setProductOptions(ArrayOfResponseProductOption $ProductOptions): static
    {
        $this->ProductOptions = $ProductOptions;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->Reference;
    }

    public function setReference(string $Reference): static
    {
        $this->Reference = $Reference;

        return $this;
    }

    public function getStatus(): ResponseStatus
    {
        return $this->Status;
    }

    public function setStatus(ResponseStatus $Status): static
    {
        $this->Status = $Status;

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
