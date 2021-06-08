<?php

namespace DivideBV\Postnl\ComplexTypes;

class TimeframeTimeFrame extends BaseType
{
    protected string $From;

    protected string $To;

    protected array $Options;

    public function __construct(string $From, string $To, array $Options)
    {
        $this->setFrom($From);
        $this->setTo($To);
        $this->setOptions($Options);
    }

    public function getFrom(): string
    {
        return $this->From;
    }

    public function setFrom(string $From): static
    {
        $this->From = $From;

        return $this;
    }

    public function getOptions(): array
    {
        return $this->Options;
    }

    public function setOptions(array $Options): static
    {
        $this->Options = $Options;

        return $this;
    }

    public function getTo(): string
    {
        return $this->To;
    }

    public function setTo(string $To): static
    {
        $this->To = $To;

        return $this;
    }
}
