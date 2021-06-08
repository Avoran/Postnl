<?php

namespace DivideBV\Postnl\ComplexTypes;

class GetDeliveryDateResponse extends BaseType
{
    protected ?string $DeliveryDate = null;

    protected array $Options;

    public function __construct(string $DeliveryDate, array $Options)
    {
        $this->setDeliveryDate($DeliveryDate);
        $this->setOptions($Options);
    }

    public function getDeliveryDate(): ?string
    {
        return $this->DeliveryDate;
    }

    public function setDeliveryDate(string $DeliveryDate): static
    {
        $this->DeliveryDate = $DeliveryDate;

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
