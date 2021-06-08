<?php

namespace DivideBV\Postnl\ComplexTypes;

class GetDeliveryDateRequest extends BaseType
{
    protected GetDeliveryDate $GetDeliveryDate;

    protected Message $Message;

    public function __construct(Message $Message, GetDeliveryDate $GetDeliveryDate)
    {
        $this->setMessage($Message);
        $this->setGetDeliveryDate($GetDeliveryDate);
    }

    public function getGetDeliveryDate(): GetDeliveryDate
    {
        return $this->GetDeliveryDate;
    }

    public function setGetDeliveryDate(GetDeliveryDate $GetDeliveryDate): static
    {
        $this->GetDeliveryDate = $GetDeliveryDate;

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
}
