<?php

namespace DivideBV\Postnl\ComplexTypes;

class CurrentStatusByReferenceRequest extends BaseType
{
    protected Message $Message;

    protected RequestCustomer $Customer;

    protected RequestShipment $Shipment;

    public function __construct(Message $Message, RequestCustomer $Customer, RequestShipment $Shipment)
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

    public function getShipment(): RequestShipment
    {
        return $this->Shipment;
    }

    protected function setShipment(RequestShipment $Shipment): static
    {
        $this->Shipment = $Shipment;

        return $this;
    }
}
