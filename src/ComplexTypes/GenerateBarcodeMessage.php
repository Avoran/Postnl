<?php

namespace DivideBV\Postnl\ComplexTypes;

/**
 * XML namespace: http://postnl.nl/cif/domain/BarcodeWebService/
 */
class GenerateBarcodeMessage extends BaseType
{
    protected Message $Message;

    protected GenerateBarcodeCustomer $Customer;

    protected Barcode $Barcode;

    public function __construct(Message $Message, GenerateBarcodeCustomer $Customer, Barcode $Barcode)
    {
        $this->setMessage($Message);
        $this->setCustomer($Customer);
        $this->setBarcode($Barcode);
    }

    public function getMessage(): Message
    {
        return $this->Message;
    }

    public function setMessage(Message $Message): static
    {
        $this->Message = $Message;

        return $this;
    }

    public function getCustomer(): GenerateBarcodeCustomer
    {
        return $this->Customer;
    }

    public function setCustomer(GenerateBarcodeCustomer $Customer): static
    {
        $this->Customer = $Customer;

        return $this;
    }

    public function getBarcode(): Barcode
    {
        return $this->Barcode;
    }

    public function setBarcode(Barcode $Barcode): static
    {
        $this->Barcode = $Barcode;

        return $this;
    }
}
