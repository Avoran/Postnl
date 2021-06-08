<?php

namespace DivideBV\Postnl\ComplexTypes;

class GetSentDateResponse extends BaseType
{
    protected string $SentDate;

    public function __construct(string $SentDate)
    {
        $this->setSentDate($SentDate);
    }

    public function getSentDate(): string
    {
        return $this->SentDate;
    }

    public function setSentDate(string $SentDate): static
    {
        $this->SentDate = $SentDate;

        return $this;
    }
}
