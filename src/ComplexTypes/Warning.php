<?php

namespace DivideBV\Postnl\ComplexTypes;

class Warning extends BaseType
{
    protected string $Code;

    protected string $Description;

    public function __construct(string $Code, string $Description)
    {
        $this->setCode($Code);
        $this->setDescription($Description);
    }

    public function getCode(): string
    {
        return $this->Code;
    }

    public function setCode(string $Code): static
    {
        $this->Code = $Code;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }
}
