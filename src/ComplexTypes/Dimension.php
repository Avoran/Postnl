<?php

namespace DivideBV\Postnl\ComplexTypes;

class Dimension extends BaseType
{
    protected ?string $Height = null;

    protected ?string $Length = null;

    protected ?string $Volume = null;

    protected ?string $Weight = null;

    protected ?string $Width = null;

    public function __construct(
        string $Weight,
        ?string $Height = null,
        ?string $Length = null,
        ?string $Volume = null,
        ?string $Width = null
    ) {
        $this->setWeight($Weight);

        // Optional parameters.
        $this->setHeight($Height);
        $this->setLength($Length);
        $this->setVolume($Volume);
        $this->setWidth($Width);
    }

    public function getWeight(): ?string
    {
        return $this->Weight;
    }

    public function setWeight(string $Weight): static
    {
        $this->Weight = $Weight;

        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->Height;
    }

    public function setHeight(?string $Height): static
    {
        $this->Height = $Height;

        return $this;
    }

    public function getLength(): ?string
    {
        return $this->Length;
    }

    public function setLength(?string $Length): static
    {
        $this->Length = $Length;

        return $this;
    }

    public function getVolume(): ?string
    {
        return $this->Volume;
    }

    public function setVolume(?string $Volume): static
    {
        $this->Volume = $Volume;

        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->Width;
    }

    public function setWidth(?string $Width): static
    {
        $this->Width = $Width;

        return $this;
    }
}
