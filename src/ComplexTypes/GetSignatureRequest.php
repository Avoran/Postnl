<?php

namespace DivideBV\Postnl\ComplexTypes;

class GetSignatureRequest extends BaseType
{
    protected Message $Message;

    protected RequestCustomer $Customer;

    protected RequestSignature $Shipment;

    public function __construct(Message $Message, RequestCustomer $Customer, RequestSignature $Shipment)
    {
        $this->setMessage($Message);
        $this->setCustomer($Customer);
        $this->setShipment($Shipment);
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

    public function getCustomer(): RequestCustomer
    {
        return $this->Customer;
    }

    public function setCustomer(RequestCustomer $Customer): static
    {
        $this->Customer = $Customer;

        return $this;
    }

    public function getShipment(): RequestSignature
    {
        return $this->Shipment;
    }

    public function setShipment(RequestSignature $Shipment): static
    {
        $this->Shipment = $Shipment;

        return $this;
    }
}
