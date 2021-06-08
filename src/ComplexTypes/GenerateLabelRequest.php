<?php

namespace DivideBV\Postnl\ComplexTypes;

class GenerateLabelRequest extends BaseType
{
    protected LabellingMessage $Message;

    protected Customer $Customer;

    protected ArrayOfShipment $Shipments;

    protected ?string $LabelSignature = null;

    public function __construct(
        LabellingMessage $Message,
        Customer $Customer,
        ArrayOfShipment $Shipments,
        ?string $LabelSignature = null
    ) {
        $this->setMessage($Message);
        $this->setCustomer($Customer);
        $this->setShipments($Shipments);
        $this->setLabelSignature($LabelSignature);
    }

    public function getMessage(): LabellingMessage
    {
        return $this->Message;
    }

    public function setMessage(LabellingMessage $Message): static
    {
        $this->Message = $Message;

        return $this;
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

    public function getShipments(): ArrayOfShipment
    {
        return $this->Shipments;
    }

    public function setShipments(ArrayOfShipment $Shipments): static
    {
        $this->Shipments = $Shipments;

        return $this;
    }

    public function getLabelSignature(): ?string
    {
        return $this->LabelSignature;
    }

    public function setLabelSignature(?string $LabelSignature): static
    {
        $this->LabelSignature = $LabelSignature;

        return $this;
    }
}
