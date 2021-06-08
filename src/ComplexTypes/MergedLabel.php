<?php

namespace DivideBV\Postnl\ComplexTypes;

class MergedLabel extends BaseType
{
    protected array $Barcodes;

    protected ArrayOfLabel $Labels;

    public function __construct(array $Barcodes, ArrayOfLabel $Labels)
    {
        $this->setBarcodes($Barcodes);
        $this->setLabels($Labels);
    }

    public function getBarcodes(): array
    {
        return $this->Barcodes;
    }

    public function setBarcodes(array $Barcodes): static
    {
        $this->Barcodes = $Barcodes;

        return $this;
    }

    public function getLabels(): ArrayOfLabel
    {
        return $this->Labels;
    }

    public function setLabels(ArrayOfLabel $Labels): static
    {
        $this->Labels = $Labels;

        return $this;
    }
}
