<?php

namespace DivideBV\Postnl\ComplexTypes;

class CurrentStatusByStatusRequest extends BaseType
{
    protected Message $Message;

    protected RequestCustomer $Customer;

    protected RequestShipmentStatus $Shipment;

    public function __construct(Message $Message, RequestCustomer $Customer, RequestShipmentStatus $Shipment)
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

    public function getShipment(): RequestShipmentStatus
    {
        return $this->Shipment;
    }

    public function setShipment(RequestShipmentStatus $Shipment): static
    {
        $this->Shipment = $Shipment;

        return $this;
    }
}
