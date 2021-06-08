<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfContent extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'Content';

    protected array $Content;

    public function __construct(array $Content)
    {
        $this->setContent($Content);
    }

    public function getContent(): array
    {
        return $this->Content;
    }

    public function setContent(array $Content): static
    {
        $this->Content = $Content;

        return $this;
    }
}
