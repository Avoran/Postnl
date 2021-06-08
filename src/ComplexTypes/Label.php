<?php

namespace DivideBV\Postnl\ComplexTypes;

class Label extends BaseType
{
    protected string $Content;

    protected string $Contenttype;

    protected string $Labeltype;

    public function __construct(string $Content, string $Contenttype, string $Labeltype)
    {
        $this->setContent($Content);
        $this->setContenttype($Contenttype);
        $this->setLabeltype($Labeltype);
    }

    public function getContent(): string
    {
        return $this->Content;
    }

    public function setContent(string $Content): static
    {
        $this->Content = $Content;

        return $this;
    }

    public function getContenttype(): string
    {
        return $this->Contenttype;
    }

    public function setContenttype(string $Contenttype): static
    {
        $this->Contenttype = $Contenttype;

        return $this;
    }

    public function getLabeltype(): string
    {
        return $this->Labeltype;
    }

    public function setLabeltype(string $Labeltype): static
    {
        $this->Labeltype = $Labeltype;

        return $this;
    }
}
