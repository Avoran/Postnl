<?php

namespace DivideBV\Postnl\ComplexTypes;

class GenerateLabelResponse extends BaseType
{
    protected ?ArrayOfMergedLabel $MergedLabels = null;

    protected ?ArrayOfResponseShipment $ResponseShipments = null;

    public function __construct(
        ?ArrayOfMergedLabel $MergedLabels = null,
        ?ArrayOfResponseShipment $ResponseShipments = null
    ) {
        $this->setMergedLabels($MergedLabels);
        $this->setResponseShipments($ResponseShipments);
    }

    public function getMergedLabels(): ?ArrayOfMergedLabel
    {
        return $this->MergedLabels;
    }

    public function setMergedLabels(?ArrayOfMergedLabel $MergedLabels): static
    {
        $this->MergedLabels = $MergedLabels;

        return $this;
    }

    public function getResponseShipments(): ?ArrayOfResponseShipment
    {
        return $this->ResponseShipments;
    }

    public function setResponseShipments(?ArrayOfResponseShipment $ResponseShipments): static
    {
        $this->ResponseShipments = $ResponseShipments;

        return $this;
    }
}
