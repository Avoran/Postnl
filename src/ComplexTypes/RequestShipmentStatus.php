<?php

namespace DivideBV\Postnl\ComplexTypes;

class RequestShipmentStatus extends BaseType
{
    protected string $StatusCode;

    protected string $DateFrom;

    protected string $DateTo;

    public function __construct(string $StatusCode, string $DateFrom, string $DateTo)
    {
        $this->setStatusCode($StatusCode);
        $this->setDateFrom($DateFrom);
        $this->setDateTo($DateTo);
    }

    public function getStatusCode(): string
    {
        return $this->StatusCode;
    }

    public function setStatusCode(string $StatusCode): static
    {
        $this->StatusCode = $StatusCode;

        return $this;
    }

    public function getDateFrom(): string
    {
        return $this->DateFrom;
    }

    public function setDateFrom(string $DateFrom): static
    {
        $this->DateFrom = $DateFrom;

        return $this;
    }

    public function getDateTo(): string
    {
        return $this->DateTo;
    }

    public function setDateTo(string $DateTo): static
    {
        $this->DateTo = $DateTo;

        return $this;
    }
}
