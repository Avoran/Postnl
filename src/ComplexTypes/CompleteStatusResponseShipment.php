<?php

namespace DivideBV\Postnl\ComplexTypes;

use DateTime;

class CompleteStatusResponseShipment extends BaseType
{
    protected ArrayOfResponseAddress $Addresses;

    protected ArrayOfResponseAmount $Amounts;

    protected string $Barcode;

    protected ResponseCustomer $Customer;

    protected DateTime $DeliveryDate;

    protected ResponseDimension $Dimension;

    protected ArrayOfCompleteStatusResponseEvent $Events;

    protected ResponseExpectation $Expectation;

    protected ArrayOfResponseGroup $Groups;

    protected ArrayOfCompleteStatusResponseOldStatus $OldStatuses;

    protected string $ProductCode;

    protected string $ProductDescription;

    protected ArrayOfResponseProductOption $ProductOptions;

    protected string $Reference;

    protected ResponseStatus $Status;

    protected ArrayOfWarning $Warnings;

    public function __construct(
        ArrayOfResponseAddress $Addresses,
        ArrayOfResponseAmount $Amounts,
        string $Barcode,
        ResponseCustomer $Customer,
        DateTime $DeliveryDate,
        ResponseDimension $Dimension,
        ArrayOfCompleteStatusResponseEvent $Events,
        ResponseExpectation $Expectation,
        ArrayOfResponseGroup $Groups,
        ArrayOfCompleteStatusResponseOldStatus $OldStatuses,
        string $ProductCode,
        string $ProductDescription,
        ArrayOfResponseProductOption $ProductOptions,
        string $Reference,
        ResponseStatus $Status,
        ArrayOfWarning $Warnings
    ) {
        $this->setAddresses($Addresses);
        $this->setAmounts($Amounts);
        $this->setBarcode($Barcode);
        $this->setCustomer($Customer);
        $this->setDeliveryDate($DeliveryDate);
        $this->setDimension($Dimension);
        $this->setEvents($Events);
        $this->setExpectation($Expectation);
        $this->setGroups($Groups);
        $this->setOldStatuses($OldStatuses);
        $this->setProductCode($ProductCode);
        $this->setProductDescription($ProductDescription);
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

    public function getBarcode(): string
    {
        return $this->Barcode;
    }

    public function setBarcode(string $Barcode): static
    {
        $this->Barcode = $Barcode;

        return $this;
    }

    public function getCustomer(): ResponseCustomer
    {
        return $this->Customer;
    }

    public function setCustomer(ResponseCustomer $Customer): static
    {
        $this->Customer = $Customer;

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

    public function getEvents(): ArrayOfCompleteStatusResponseEvent
    {
        return $this->Events;
    }

    public function setEvents(ArrayOfCompleteStatusResponseEvent $Events): static
    {
        $this->Events = $Events;

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

    public function getOldStatuses(): ArrayOfCompleteStatusResponseOldStatus
    {
        return $this->OldStatuses;
    }

    public function setOldStatuses(ArrayOfCompleteStatusResponseOldStatus $OldStatuses): static
    {
        $this->OldStatuses = $OldStatuses;

        return $this;
    }

    public function getProductCode(): string
    {
        return $this->ProductCode;
    }

    public function setProductCode(string $ProductCode): static
    {
        $this->ProductCode = $ProductCode;

        return $this;
    }

    public function getProductDescription(): string
    {
        return $this->ProductDescription;
    }

    public function setProductDescription(string $ProductDescription): static
    {
        $this->ProductDescription = $ProductDescription;

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

    public function getReference(): string
    {
        return $this->Reference;
    }

    public function setReference(string $Reference): static
    {
        $this->Reference = $Reference;

        return $this;
    }

    protected function getStatus(): ResponseStatus
    {
        return $this->Status;
    }

    public function setStatus(ResponseStatus $Status): static
    {
        $this->Status = $Status;

        return $this;
    }

    protected function getWarnings(): ArrayOfWarning
    {
        return $this->Warnings;
    }

    public function setWarnings(ArrayOfWarning $Warnings): static
    {
        $this->Warnings = $Warnings;

        return $this;
    }
}
