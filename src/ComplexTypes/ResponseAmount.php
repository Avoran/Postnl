<?php

namespace DivideBV\Postnl\ComplexTypes;

class ResponseAmount extends BaseType
{
    protected string $AccountName;

    protected string $AccountNr;

    protected string $AmountType;

    protected string $Currency;

    protected string $Reference;

    protected string $TransactionNumber;

    protected string $Value;

    public function __construct(
        string $AccountName,
        string $AccountNr,
        string $AmountType,
        string $Currency,
        string $Reference,
        string $TransactionNumber,
        string $Value
    ) {
        $this->setAccountName($AccountName);
        $this->setAccountNr($AccountNr);
        $this->setAmountType($AmountType);
        $this->setCurrency($Currency);
        $this->setReference($Reference);
        $this->setTransactionNumber($TransactionNumber);
        $this->setValue($Value);
    }

    public function getAccountName(): string
    {
        return $this->AccountName;
    }

    public function setAccountName(string $AccountName): static
    {
        $this->AccountName = $AccountName;

        return $this;
    }

    public function getAccountNr(): string
    {
        return $this->AccountNr;
    }

    public function setAccountNr(string $AccountNr): static
    {
        $this->AccountNr = $AccountNr;

        return $this;
    }

    public function getAmountType(): string
    {
        return $this->AmountType;
    }

    public function setAmountType(string $AmountType): static
    {
        $this->AmountType = $AmountType;

        return $this;
    }

    public function getCurrency(): string
    {
        return $this->Currency;
    }

    public function setCurrency(string $Currency): static
    {
        $this->Currency = $Currency;

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

    public function getTransactionNumber(): string
    {
        return $this->TransactionNumber;
    }

    public function setTransactionNumber(string $TransactionNumber): static
    {
        $this->TransactionNumber = $TransactionNumber;

        return $this;
    }

    public function getValue(): string
    {
        return $this->Value;
    }

    public function setValue(string $Value): static
    {
        $this->Value = $Value;

        return $this;
    }
}
