<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfExceptionData extends BaseType
{
    protected array $ExceptionData;

    public function __construct(array $ExceptionData)
    {
        $this->setExceptionData($ExceptionData);
    }

    public function getExceptionData(): array
    {
        return $this->ExceptionData;
    }

    public function setExceptionData(array $ExceptionData): static
    {
        $this->ExceptionData = $ExceptionData;

        return $this;
    }
}
