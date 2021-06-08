<?php

namespace DivideBV\Postnl\ComplexTypes;

class GetLocationRequest extends BaseType
{
    protected ?string $LocationCode = null;

    protected Message $Message;

    protected ?string $RetailNetworkID = null;

    public function __construct(string $LocationCode, Message $Message, string $RetailNetworkID)
    {
        $this->LocationCode = $LocationCode;
        $this->Message = $Message;
        $this->RetailNetworkID = $RetailNetworkID;
    }

    public function getLocationCode(): ?string
    {
        return $this->LocationCode;
    }

    public function setLocationCode(string $LocationCode): static
    {
        $this->LocationCode = $LocationCode;

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

    public function getRetailNetworkID(): ?string
    {
        return $this->RetailNetworkID;
    }

    public function setRetailNetworkID(string $RetailNetworkID): static
    {
        $this->RetailNetworkID = $RetailNetworkID;

        return $this;
    }
}
