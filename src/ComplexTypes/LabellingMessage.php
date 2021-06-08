<?php

namespace DivideBV\Postnl\ComplexTypes;

class LabellingMessage extends Message
{
    protected ?string $Printertype = null;

    public function __construct(
        string $Printertype = 'GraphicFile|PDF',
        int $MessageID = 1,
        ?string $MessageTimeStamp = null
    ) {
        parent::__construct($MessageID, $MessageTimeStamp);
        $this->setPrintertype($Printertype);
    }

    public function getPrintertype(): ?string
    {
        return $this->Printertype;
    }

    public function setPrintertype(string $Printertype)
    {
        $this->Printertype = $Printertype;
    }
}
