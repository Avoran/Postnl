<?php

namespace DivideBV\Postnl\ComplexTypes;

class ProductOption extends BaseType
{
    protected string $Characteristic;

    protected string $Option;

    public function __construct(string $Characteristic, string $Option)
    {
        $this->setCharacteristic($Characteristic);
        $this->setOption($Option);
    }

    public function getCharacteristic(): string
    {
        return $this->Characteristic;
    }

    public function setCharacteristic(string $Characteristic): static
    {
        $this->Characteristic = $Characteristic;

        return $this;
    }

    public function getOption(): string
    {
        return $this->Option;
    }

    public function setOption(string $Option): static
    {
        $this->Option = $Option;

        return $this;
    }
}
