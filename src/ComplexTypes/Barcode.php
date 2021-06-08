<?php

namespace DivideBV\Postnl\ComplexTypes;

/**
 * XML namespace: http://postnl.nl/cif/domain/BarcodeWebService/
 */
class Barcode extends BaseType
{
    protected string $Type;

    protected string $Range;

    protected string $Serie;

    public function __construct(string $Type, string $Range, string $Serie)
    {
        $this->setType($Type);
        $this->setRange($Range);
        $this->setSerie($Serie);
    }

    public function getType(): string
    {
        return $this->Type;
    }

    public function setType(string $Type): static
    {
        $this->Type = $Type;

        return $this;
    }

    public function getRange(): string
    {
        return $this->Range;
    }

    public function setRange(string $Range): static
    {
        $this->Range = $Range;

        return $this;
    }

    public function getSerie(): string
    {
        return $this->Serie;
    }

    public function setSerie(string $Serie): static
    {
        $this->Serie = $Serie;

        return $this;
    }
}
