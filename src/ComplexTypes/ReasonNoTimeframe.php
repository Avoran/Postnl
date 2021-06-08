<?php

namespace DivideBV\Postnl\ComplexTypes;

class ReasonNoTimeframe extends BaseType
{
    protected ?string $Code = null;

    protected ?string $Date = null;

    protected ?string $Description = null;

    protected array $Options;

    public function __construct(string $Code, string $Date, string $Description, array $Options)
    {
        $this->setCode($Code);
        $this->setDate($Date);
        $this->setDescription($Description);
        $this->setOptions($Options);
    }

    public function getCode(): ?string
    {
        return $this->Code;
    }

    public function setCode(string $Code): static
    {
        $this->Code = $Code;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->Date;
    }

    public function setDate(string $Date): static
    {
        $this->Date = $Date;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

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
}
