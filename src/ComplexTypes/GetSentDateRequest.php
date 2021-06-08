<?php

namespace DivideBV\Postnl\ComplexTypes;

class GetSentDateRequest extends BaseType
{
    protected GetSentDate $GetSentDate;

    protected Message $Message;

    public function __construct(Message $Message, GetSentDate $GetSentDate)
    {
        $this->setMessage($Message);
        $this->setGetSentDate($GetSentDate);
    }

    public function getGetSentDate(): GetSentDate
    {
        return $this->GetSentDate;
    }

    public function setGetSentDate(GetSentDate $GetSentDate): static
    {
        $this->GetSentDate = $GetSentDate;

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
