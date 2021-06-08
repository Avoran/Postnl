<?php

namespace DivideBV\Postnl\ComplexTypes;

class ConfirmingMessage extends BaseType
{
    protected Customer $Customer;

    protected Message $Message;

    protected ArrayOfShipment $Shipments;

    public function __construct(Customer $Customer, Message $Message, ArrayOfShipment $Shipments)
    {
        $this->setCustomer($Customer);
        $this->setMessage($Message);
        $this->setShipments($Shipments);
    }

    public function getCustomer(): Customer
    {
        return $this->Customer;
    }

    public function setCustomer(Customer $Customer): static
    {
        $this->Customer = $Customer;

        return $this;
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

    public function getShipments(): ArrayOfShipment
    {
        return $this->Shipments;
    }

    public function setShipments(ArrayOfShipment $Shipments): static
    {
        $this->Shipments = $Shipments;

        return $this;
    }
}
