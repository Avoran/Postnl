<?php

namespace DivideBV\Postnl\ComplexTypes;

class Dimension extends BaseType
{
    protected ?int $Height = null;

    protected ?int $Length = null;

    protected ?int $Volume = null;

    protected ?int $Weight = null;

    protected ?int $Width = null;

    public function __construct(
        int $Weight,
        ?int $Height = null,
        ?int $Length = null,
        ?int $Volume = null,
        ?int $Width = null
    ) {
        $this->setWeight($Weight);

        // Optional parameters.
        $this->setHeight($Height);
        $this->setLength($Length);
        $this->setVolume($Volume);
        $this->setWidth($Width);
    }

    public function getWeight(): ?int
    {
        return $this->Weight;
    }

    public function setWeight(int $Weight): static
    {
        $this->Weight = $Weight;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->Height;
    }

    public function setHeight(?int $Height): static
    {
        $this->Height = $Height;

        return $this;
    }

    public function getLength(): ?int
    {
        return $this->Length;
    }

    public function setLength(?int $Length): static
    {
        $this->Length = $Length;

        return $this;
    }

    public function getVolume(): ?int
    {
        return $this->Volume;
    }

    public function setVolume(?int $Volume): static
    {
        $this->Volume = $Volume;

        return $this;
    }

    public function getWidth(): ?int
    {
        return $this->Width;
    }

    public function setWidth(?int $Width): static
    {
        $this->Width = $Width;

        return $this;
    }
}
