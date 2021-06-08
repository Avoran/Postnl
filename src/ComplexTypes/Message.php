<?php

namespace DivideBV\Postnl\ComplexTypes;

use DateTime;

/**
 * XML namespace: http://postnl.nl/cif/domain/BarcodeWebService/
 */
class Message extends BaseType
{
    protected ?int $MessageID = null;

    protected ?string $MessageTimeStamp = null;

    public function __construct(int $MessageID = 1, ?string $MessageTimeStamp = null)
    {
        $this->setMessageID($MessageID);
        $this->setMessageTimeStamp($MessageTimeStamp ?: (new DateTime())->format("d-m-Y H:i:s"));
    }

    public function getMessageID(): ?int
    {
        return $this->MessageID;
    }

    public function setMessageID(int $MessageID): static
    {
        $this->MessageID = $MessageID;

        return $this;
    }

    public function getMessageTimeStamp(): ?string
    {
        return $this->MessageTimeStamp;
    }

    public function setMessageTimeStamp(string $MessageTimeStamp): static
    {
        $this->MessageTimeStamp = $MessageTimeStamp;

        return $this;
    }
}
