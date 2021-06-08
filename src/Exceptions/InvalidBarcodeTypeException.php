<?php

namespace DivideBV\Postnl\Exceptions;

use Exception;

class InvalidBarcodeTypeException extends Exception
{
    public function __construct(mixed $type)
    {
        parent::__construct("'$type' is not a valid barcode type.");
    }
}
