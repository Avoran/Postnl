<?php

namespace DivideBV\Postnl\ComplexTypes;

use DateTime;

class BaseLocation extends BaseType
{
    protected string $AllowSundaySorting;

    protected string $DeliveryDate;

    protected array $DeliveryOptions;

    protected ?string $OpeningTime = null;

    protected array $Options;

    public function __construct(
        string $AllowSundaySorting,
        string $DeliveryDate,
        array $DeliveryOptions,
        array $Options
    ) {
        $this->setAllowSundaySorting($AllowSundaySorting);
        $this->setDeliveryDate($DeliveryDate ?: (new DateTime('next monday'))->format('d-m-Y'));
        $this->setDeliveryOptions($DeliveryOptions);
        $this->setOptions($Options);
    }

    public function getAllowSundaySorting(): string
    {
        return $this->AllowSundaySorting;
    }

    public function setAllowSundaySorting(string $AllowSundaySorting): static
    {
        $this->AllowSundaySorting = $AllowSundaySorting;

        return $this;
    }

    public function getDeliveryDate(): string
    {
        return $this->DeliveryDate;
    }

    public function setDeliveryDate(string $DeliveryDate): static
    {
        $this->DeliveryDate = $DeliveryDate;

        return $this;
    }

    public function getDeliveryOptions(): array
    {
        return $this->DeliveryOptions;
    }

    public function setDeliveryOptions(array $DeliveryOptions): static
    {
        $this->DeliveryOptions = $DeliveryOptions;

        return $this;
    }

    public function getOpeningTime(): ?string
    {
        return $this->OpeningTime;
    }

    public function setOpeningTime(string $OpeningTime): static
    {
        $this->OpeningTime = $OpeningTime;

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
