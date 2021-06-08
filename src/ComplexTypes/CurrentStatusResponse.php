<?php

namespace DivideBV\Postnl\ComplexTypes;

class CurrentStatusResponse extends BaseType
{
    protected ArrayOfCurrentStatusResponseShipment $Shipments;

    public function __construct(ArrayOfCurrentStatusResponseShipment $Shipments)
    {
        $this->setShipments($Shipments);
    }

    public function getShipments(): ArrayOfCurrentStatusResponseShipment
    {
        return $this->Shipments;
    }

    public function setShipments(ArrayOfCurrentStatusResponseShipment $Shipments): static
    {
        $this->Shipments = $Shipments;

        return $this;
    }
}
