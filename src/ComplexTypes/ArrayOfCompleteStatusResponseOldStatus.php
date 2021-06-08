<?php

namespace DivideBV\Postnl\ComplexTypes;

class ArrayOfCompleteStatusResponseOldStatus extends BaseArrayOfType
{
    /**
     * @var string The name of the array property this class is a wrapper of.
     */
    protected const WRAPPED_PROPERTY = 'CompleteStatusResponseOldStatus';

    protected array $CompleteStatusResponseOldStatus;

    public function __construct(array $CompleteStatusResponseOldStatus)
    {
        $this->setCompleteStatusResponseOldStatus($CompleteStatusResponseOldStatus);
    }

    public function getCompleteStatusResponseOldStatus(): array
    {
        return $this->CompleteStatusResponseOldStatus;
    }

    public function setCompleteStatusResponseOldStatus(array $CompleteStatusResponseOldStatus): static
    {
        $this->CompleteStatusResponseOldStatus = $CompleteStatusResponseOldStatus;

        return $this;
    }
}
