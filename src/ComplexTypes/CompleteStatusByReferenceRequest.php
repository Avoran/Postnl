<?php

namespace DivideBV\Postnl\ComplexTypes;

class CompleteStatusByReferenceRequest extends BaseType
{
    protected Message $Message;

    protected RequestCustomer $Customer;

    protected RequestShipment $Shipment;

    public function __construct(Message $Message, RequestCustomer $RequestCustomer, RequestShipment $RequestShipment)
    {
        $this->setMessage($Message);
        $this->setCustomer($RequestCustomer);
        $this->setShipment($RequestShipment);
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

    public function getShipment(): RequestShipment
    {
        return $this->Shipment;
    }

    public function setShipment(RequestShipment $Shipment): static
    {
        $this->Shipment = $Shipment;

        return $this;
    }
}
