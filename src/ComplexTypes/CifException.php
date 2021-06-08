<?php

namespace DivideBV\Postnl\ComplexTypes;

use Exception;

class CifException extends Exception
{
    protected ArrayOfExceptionData $Errors;

    public function __construct(ArrayOfExceptionData $Errors)
    {
        $this->setErrors($Errors);

        parent::__construct();
    }

    public function getErrors(): ArrayOfExceptionData
    {
        return $this->Errors;
    }

    public function setErrors(ArrayOfExceptionData $Errors): static
    {
        $this->Errors = $Errors;

        return $this;
    }
}
