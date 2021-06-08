<?php

namespace DivideBV\Postnl\ComplexTypes;

class ExceptionData extends BaseType
{
    protected ?string $Description = null;

    protected ?string $ErrorMsg = null;

    protected ?string $ErrorNumber = null;

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getErrorMsg(): ?string
    {
        return $this->ErrorMsg;
    }

    public function setErrorMsg(string $ErrorMsg): static
    {
        $this->ErrorMsg = $ErrorMsg;

        return $this;
    }

    public function getErrorNumber(): ?string
    {
        return $this->ErrorNumber;
    }

    public function setErrorNumber(string $ErrorNumber): static
    {
        $this->ErrorNumber = $ErrorNumber;

        return $this;
    }
}
