<?php

namespace DivideBV\Postnl\ComplexTypes;

class OpeningHours extends BaseType
{
    protected ?string $Monday = null;

    protected ?string $Tuesday = null;

    protected ?string $Wednesday = null;

    protected ?string $Thursday = null;

    protected ?string $Friday = null;

    protected ?string $Saturday = null;

    protected ?string $Sunday = null;

    public function getMonday(): ?string
    {
        return $this->Monday;
    }

    public function setMonday(string $Monday): static
    {
        $this->Monday = $Monday;

        return $this;
    }

    public function getTuesday(): ?string
    {
        return $this->Tuesday;
    }

    public function setTuesday(string $Tuesday): static
    {
        $this->Tuesday = $Tuesday;

        return $this;
    }

    public function getWednesday(): ?string
    {
        return $this->Wednesday;
    }

    public function setWednesday(string $Wednesday): static
    {
        $this->Wednesday = $Wednesday;

        return $this;
    }

    public function getThursday(): ?string
    {
        return $this->Thursday;
    }

    public function setThursday(string $Thursday): static
    {
        $this->Thursday = $Thursday;

        return $this;
    }

    public function getFriday(): ?string
    {
        return $this->Friday;
    }

    public function setFriday(string $Friday): static
    {
        $this->Friday = $Friday;

        return $this;
    }

    public function getSaturday(): ?string
    {
        return $this->Saturday;
    }

    public function setSaturday(string $Saturday): static
    {
        $this->Saturday = $Saturday;

        return $this;
    }

    public function getSunday(): ?string
    {
        return $this->Sunday;
    }

    public function setSunday(string $Sunday): static
    {
        $this->Sunday = $Sunday;

        return $this;
    }
}
