<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfGetSignatureResponseSignature extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'GetSignatureResponseSignature';

    protected array $GetSignatureResponseSignature;

    public function __construct(array $GetSignatureResponseSignature)
    {
        $this->setGetSignatureResponseSignature($GetSignatureResponseSignature);
    }

    public function getGetSignatureResponseSignature(): array
    {
        return $this->GetSignatureResponseSignature;
    }

    public function setGetSignatureResponseSignature(array $GetSignatureResponseSignature): static
    {
        $this->GetSignatureResponseSignature = $GetSignatureResponseSignature;

        return $this;
    }
}
