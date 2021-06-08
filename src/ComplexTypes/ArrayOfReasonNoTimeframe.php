<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfReasonNoTimeframe extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'ReasonNoTimeframe';

    protected array $ReasonNoTimeframe;

    public function __construct(array $ReasonNoTimeFrame)
    {
        $this->setReasonNoTimeframe($ReasonNoTimeFrame);
    }

    public function getReasonNoTimeframe(): array
    {
        return $this->ReasonNoTimeframe;
    }

    public function setReasonNoTimeframe(array $ReasonNoTimeframe): static
    {
        $this->ReasonNoTimeframe = $ReasonNoTimeframe;

        return $this;
    }
}
