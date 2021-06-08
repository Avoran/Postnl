<?php

namespace DivideBV\Postnl\ComplexTypes;

class Amount extends BaseType
{
    protected string $AccountName;

    protected string $AmountType;

    protected string $BIC;

    protected string $Currency;

    protected string $IBAN;

    protected string $Reference;

    protected string $TransactionNumber;

    protected string $Value;

    public function __construct(
        string $AccountName,
        string $AmountType,
        string $BIC,
        string $Currency,
        string $IBAN,
        string $Reference,
        string $TransactionNumber,
        string $Value
    ) {
        $this->setAccountName($AccountName);
        $this->setAmountType($AmountType);
        $this->setBIC($BIC);
        $this->setCurrency($Currency);
        $this->setIBAN($IBAN);
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

    public function getAmountType(): string
    {
        return $this->AmountType;
    }

    public function setAmountType(string $AmountType): static
    {
        $this->AmountType = $AmountType;

        return $this;
    }

    public function getBIC(): string
    {
        return $this->BIC;
    }

    public function setBIC(string $BIC): static
    {
        $this->BIC = $BIC;

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

    public function getIBAN(): string
    {
        return $this->IBAN;
    }

    public function setIBAN(string $IBAN): static
    {
        $this->IBAN = $IBAN;

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
