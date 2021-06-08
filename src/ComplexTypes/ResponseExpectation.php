<?php

namespace DivideBV\Postnl\ComplexTypes;

use DateTime;

class ResponseExpectation extends BaseType
{
    protected DateTime $ETAFrom;

    protected DateTime $ETATo;

    public function __construct(DateTime $ETAFrom, DateTime $ETATo)
    {
        $this->setETAFrom($ETAFrom);
        $this->setETATo($ETATo);
    }

    public function getETAFrom(): DateTime
    {
        return $this->ETAFrom;
    }

    public function setETAFrom(DateTime $ETAFrom): static
    {
        $this->ETAFrom = $ETAFrom;

        return $this;
    }

    public function getETATo(): DateTime
    {
        return $this->ETATo;
    }

    public function setETATo(DateTime $ETATo): static
    {
        $this->ETATo = $ETATo;

        return $this;
    }
}
