<?php

namespace DivideBV\Postnl\ComplexTypes;

class LocationArea extends BaseLocation
{
    protected ?Coordinate $CoordinatesNorthWest = null;

    protected ?Coordinate $CoordinatesSouthEast = null;

    public function getCoordinatesNorthWest(): ?Coordinate
    {
        return $this->CoordinatesNorthWest;
    }

    public function setCoordinatesNorthWest(Coordinate $CoordinatesNorthWest): static
    {
        $this->CoordinatesNorthWest = $CoordinatesNorthWest;

        return $this;
    }

    public function getCoordinatesSouthEast(): ?Coordinate
    {
        return $this->CoordinatesSouthEast;
    }

    public function setCoordinatesSouthEast(Coordinate $CoordinatesSouthEast): static
    {
        $this->CoordinatesSouthEast = $CoordinatesSouthEast;

        return $this;
    }
}
