<?php

namespace DivideBV\Postnl\ComplexTypes;

class CompleteStatusResponseEvent extends BaseType
{
    protected ?string $Code = null;

    protected ?string $Description = null;

    protected ?string $DestinationLocationCode = null;

    protected ?string $LocationCode = null;

    protected ?string $RouteCode = null;

    protected ?string $RouteName = null;

    protected ?string $TimeStamp = null;

    public function __construct(
        string $Code,
        string $Description,
        string $DestinationLocationCode,
        string $LocationCode,
        string $RouteCode,
        string $RouteName,
        string $TimeStamp
    ) {
        $this->setCode($Code);
        $this->setDescription($Description);
        $this->setDestinationLocationCode($DestinationLocationCode);
        $this->setLocationCode($LocationCode);
        $this->setRouteCode($RouteCode);
        $this->setRouteName($RouteName);
        $this->setTimeStamp($TimeStamp);
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

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getDestinationLocationCode(): ?string
    {
        return $this->DestinationLocationCode;
    }

    public function setDestinationLocationCode(string $DestinationLocationCode): static
    {
        $this->DestinationLocationCode = $DestinationLocationCode;

        return $this;
    }

    public function getLocationCode(): ?string
    {
        return $this->LocationCode;
    }

    public function setLocationCode(string $LocationCode): static
    {
        $this->LocationCode = $LocationCode;

        return $this;
    }

    public function getRouteCode(): ?string
    {
        return $this->RouteCode;
    }

    public function setRouteCode(string $RouteCode): static
    {
        $this->RouteCode = $RouteCode;

        return $this;
    }

    public function getRouteName(): ?string
    {
        return $this->RouteName;
    }

    public function setRouteName(string $RouteName): static
    {
        $this->RouteName = $RouteName;

        return $this;
    }

    public function getTimeStamp(): ?string
    {
        return $this->TimeStamp;
    }

    public function setTimeStamp(string $TimeStamp): static
    {
        $this->TimeStamp = $TimeStamp;

        return $this;
    }
}
