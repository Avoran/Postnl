<?php

namespace DivideBV\Postnl\ComplexTypes;

class ResponseDimension extends BaseType
{
    protected string $Height;

    protected string $Length;

    protected string $Volume;

    protected string $Weight;

    protected string $Width;

    public function __construct(string $Height, string $Length, string $Volume, string $Weight, string $Width)
    {
        $this->setHeight($Height);
        $this->setLength($Length);
        $this->setVolume($Volume);
        $this->setWeight($Weight);
        $this->setWidth($Width);
    }

    public function getHeight(): string
    {
        return $this->Height;
    }

    public function setHeight(string $Height): static
    {
        $this->Height = $Height;

        return $this;
    }

    public function getLength(): string
    {
        return $this->Length;
    }

    public function setLength(string $Length): static
    {
        $this->Length = $Length;

        return $this;
    }

    public function getVolume(): string
    {
        return $this->Volume;
    }

    public function setVolume(string $Volume): static
    {
        $this->Volume = $Volume;

        return $this;
    }

    public function getWeight(): string
    {
        return $this->Weight;
    }

    public function setWeight(string $Weight): static
    {
        $this->Weight = $Weight;

        return $this;
    }

    public function getWidth(): string
    {
        return $this->Width;
    }

    public function setWidth(string $Width): static
    {
        $this->Width = $Width;

        return $this;
    }
}
