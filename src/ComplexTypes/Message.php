<?php

namespace DivideBV\Postnl\ComplexTypes;

use DateTime;

/**
 * XML namespace: http://postnl.nl/cif/domain/BarcodeWebService/
 */
class Message extends BaseType
{
    protected ?string $MessageID = null;

    protected ?string $MessageTimeStamp = null;

    public function __construct(string $MessageID = '1', ?string $MessageTimeStamp = null)
    {
        $this->setMessageID($MessageID);
        $this->setMessageTimeStamp($MessageTimeStamp ?: (new DateTime())->format("d-m-Y H:i:s"));
    }

    public function getMessageID(): ?string
    {
        return $this->MessageID;
    }

    public function setMessageID(string $MessageID): static
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
