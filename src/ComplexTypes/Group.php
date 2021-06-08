<?php

namespace DivideBV\Postnl\ComplexTypes;

class Group extends BaseType
{
    protected string $GroupCount;

    protected string $GroupSequence;

    /**
     * The type of group.
     *
     * Possible values:
     *
     * - `01`: Collection request
     * - `03`: Multiple parcels in one shipment (multi-colli)
     * - `04`: Single parcel in one shipment
     */
    protected string $GroupType;

    protected string $MainBarcode;

    public function __construct(string $GroupCount, string $GroupSequence, string $GroupType, string $MainBarcode)
    {
        $this->setGroupCount($GroupCount);
        $this->setGroupSequence($GroupSequence);
        $this->setGroupType($GroupType);
        $this->setMainBarcode($MainBarcode);
    }

    public function getGroupCount(): string
    {
        return $this->GroupCount;
    }

    public function setGroupCount(string $GroupCount): static
    {
        $this->GroupCount = $GroupCount;

        return $this;
    }

    public function getGroupSequence(): string
    {
        return $this->GroupSequence;
    }

    public function setGroupSequence(string $GroupSequence): static
    {
        $this->GroupSequence = $GroupSequence;

        return $this;
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
}
