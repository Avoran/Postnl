<?php

namespace DivideBV\Postnl\ComplexTypes;

class ResponseGroup extends BaseType
{
    protected string $GroupType;

    protected string $MainBarcode;

    protected string $ShipmentAmount;

    protected string $ShipmentCounter;

    public function __construct(
        string $GroupType,
        string $MainBarcode,
        string $ShipmentAmount,
        string $ShipmentCounter
    ) {
        $this->setGroupType($GroupType);
        $this->setMainBarcode($MainBarcode);
        $this->setShipmentAmount($ShipmentAmount);
        $this->setShipmentCounter($ShipmentCounter);
    }

    public function getGroupType(): string
    {
        return $this->GroupType;
    }

    public function setGroupType(string $GroupType): static
    {
        $this->GroupType = $GroupType;

        return $this;
    }

    public function getMainBarcode(): string
    {
        return $this->MainBarcode;
    }

    public function setMainBarcode(string $MainBarcode): static
    {
        $this->MainBarcode = $MainBarcode;

        return $this;
    }

    public function getShipmentAmount(): string
    {
        return $this->ShipmentAmount;
    }

    public function setShipmentAmount(string $ShipmentAmount): static
    {
        $this->ShipmentAmount = $ShipmentAmount;

        return $this;
    }

    public function getShipmentCounter(): string
    {
        return $this->ShipmentCounter;
    }

    public function setShipmentCounter(string $ShipmentCounter): static
    {
        $this->ShipmentCounter = $ShipmentCounter;

        return $this;
    }
}
