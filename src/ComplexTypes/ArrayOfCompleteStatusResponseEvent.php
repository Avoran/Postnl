<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfCompleteStatusResponseEvent extends BaseArrayOfType
{
    /**
     * The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'CompleteStatusResponseEvent';

    protected array $CompleteStatusResponseEvent;

    public function __construct(array $CompleteStatusResponseEvent)
    {
        $this->setCompleteStatusResponseEvent($CompleteStatusResponseEvent);
    }

    public function getCompleteStatusResponseEvent(): array
    {
        return $this->CompleteStatusResponseEvent;
    }

    public function setCompleteStatusResponseEvent(array $CompleteStatusResponseEvent): static
    {
        $this->CompleteStatusResponseEvent = $CompleteStatusResponseEvent;

        return $this;
    }
}
