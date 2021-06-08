<?php

namespace DivideBV\Postnl\ComplexTypes;

class CompleteStatusResponse extends BaseType
{
    protected ArrayOfCompleteStatusResponseShipment $Shipments;

    public function __construct(ArrayOfCompleteStatusResponseShipment $Shipments)
    {
        $this->setShipments($Shipments);
    }

    public function getShipments(): ArrayOfCompleteStatusResponseShipment
    {
        return $this->Shipments;
    }

    public function setShipments(ArrayOfCompleteStatusResponseShipment $Shipments): static
    {
        $this->Shipments = $Shipments;

        return $this;
    }
}
