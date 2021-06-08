<?php

namespace DivideBV\Postnl\ComplexTypes;

class GetSignatureResponse extends BaseType
{
    protected ArrayOfGetSignatureResponseSignature $Signature;

    protected ArrayOfWarning $Warnings;

    public function __construct(ArrayOfGetSignatureResponseSignature $Signature, ArrayOfWarning $Warnings)
    {
        $this->setSignature($Signature);
        $this->setWarnings($Warnings);
    }

    public function getSignature(): ArrayOfGetSignatureResponseSignature
    {
        return $this->Signature;
    }

    public function setSignature(ArrayOfGetSignatureResponseSignature $Signature): static
    {
        $this->Signature = $Signature;

        return $this;
    }

    public function getWarnings(): ArrayOfWarning
    {
        return $this->Warnings;
    }

    public function setWarnings(ArrayOfWarning $Warnings): static
    {
        $this->Warnings = $Warnings;

        return $this;
    }
}
