<?php

namespace DivideBV\Postnl\ComplexTypes;

class Shipment extends BaseType
{
    protected ArrayOfAddress $Addresses;

    protected ?string $Barcode = null;

    protected Dimension $Dimension;

    protected ?int $ProductCodeDelivery = null;

    protected ?ArrayOfAmount $Amounts = null;

    protected ?string $CollectionTimeStampEnd = null;

    protected ?string $CollectionTimeStampStart = null;

    protected ?ArrayOfContact $Contacts = null;

    protected ?string $Content = null;

    protected ?string $CostCenter = null;

    protected ?string $CustomerOrderNumber = null;

    protected ?Customs $Customs = null;

    protected ?string $DeliveryAddress = null;

    protected ?string $DeliveryDate = null;

    protected ?string $DownPartnerBarcode = null;

    protected ?string $DownPartnerID = null;

    protected ?string $DownPartnerLocation = null;

    protected ?ArrayOfGroup $Groups = null;

    protected ?string $IDExpiration = null;

    protected ?string $IDNumber = null;

    protected ?string $IDType = null;

    protected ?string $ProductCodeCollect = null;

    protected ?ArrayOfProductOption $ProductOptions = null;

    protected ?string $ReceiverDateOfBirth = null;

    protected ?string $Reference = null;

    protected ?string $ReferenceCollect = null;

    protected ?string $Remark = null;

    protected ?string $ReturnBarcode = null;

    protected ?string $ReturnReference = null;

    public function __construct(
        ArrayOfAddress $Addresses,
        string $Barcode,
        Dimension $Dimension,
        int $ProductCodeDelivery,
        ?ArrayOfAmount $Amounts = null,
        ?string $CollectionTimeStampEnd = null,
        ?string $CollectionTimeStampStart = null,
        ?ArrayOfContact $Contacts = null,
        ?string $Content = null,
        ?string $CostCenter = null,
        ?string $CustomerOrderNumber = null,
        ?Customs $Customs = null,
        ?string $DeliveryAddress = null,
        ?string $DeliveryDate = null,
        ?string $DownPartnerBarcode = null,
        ?string $DownPartnerID = null,
        ?string $DownPartnerLocation = null,
        ?ArrayOfGroup $Groups = null,
        ?string $IDExpiration = null,
        ?string $IDNumber = null,
        ?string $IDType = null,
        ?string $ProductCodeCollect = null,
        ?ArrayOfProductOption $ProductOptions = null,
        ?string $ReceiverDateOfBirth = null,
        ?string $Reference = null,
        ?string $ReferenceCollect = null,
        ?string $Remark = null,
        ?string $ReturnBarcode = null,
        ?string $ReturnReference = null
    ) {
        $this->setAddresses($Addresses);
        $this->setBarcode($Barcode);
        $this->setDimension($Dimension);
        $this->setProductCodeDelivery($ProductCodeDelivery);

        // Optional parameters.
        $this->setAmounts($Amounts);
        $this->setCollectionTimeStampEnd($CollectionTimeStampEnd);
        $this->setCollectionTimeStampStart($CollectionTimeStampStart);
        $this->setContacts($Contacts);
        $this->setContent($Content);
        $this->setCostCenter($CostCenter);
        $this->setCustomerOrderNumber($CustomerOrderNumber);
        $this->setCustoms($Customs);
        $this->setDeliveryAddress($DeliveryAddress);
        $this->setDeliveryDate($DeliveryDate);
        $this->setDownPartnerBarcode($DownPartnerBarcode);
        $this->setDownPartnerID($DownPartnerID);
        $this->setDownPartnerLocation($DownPartnerLocation);
        $this->setGroups($Groups);
        $this->setIDExpiration($IDExpiration);
        $this->setIDNumber($IDNumber);
        $this->setIDType($IDType);
        $this->setProductCodeCollect($ProductCodeCollect);
        $this->setProductOptions($ProductOptions);
        $this->setReceiverDateOfBirth($ReceiverDateOfBirth);
        $this->setReference($Reference);
        $this->setReferenceCollect($ReferenceCollect);
        $this->setRemark($Remark);
        $this->setReturnBarcode($ReturnBarcode);
        $this->setReturnReference($ReturnReference);
    }

    public function getAddresses(): ArrayOfAddress
    {
        return $this->Addresses;
    }

    public function setAddresses(ArrayOfAddress $Addresses): static
    {
        $this->Addresses = $Addresses;

        return $this;
    }

    public function getBarcode(): ?string
    {
        return $this->Barcode;
    }

    public function setBarcode(string $Barcode): static
    {
        $this->Barcode = $Barcode;

        return $this;
    }

    public function getDimension(): Dimension
    {
        return $this->Dimension;
    }

    public function setDimension(Dimension $Dimension): static
    {
        $this->Dimension = $Dimension;

        return $this;
    }

    public function getProductCodeDelivery(): ?int
    {
        return $this->ProductCodeDelivery;
    }

    public function setProductCodeDelivery(int $ProductCodeDelivery): static
    {
        $this->ProductCodeDelivery = $ProductCodeDelivery;

        return $this;
    }

    public function getAmounts(): ?ArrayOfAmount
    {
        return $this->Amounts;
    }

    public function setAmounts(?ArrayOfAmount $Amounts): static
    {
        $this->Amounts = $Amounts;

        return $this;
    }

    public function getCollectionTimeStampEnd(): ?string
    {
        return $this->CollectionTimeStampEnd;
    }

    public function setCollectionTimeStampEnd(?string $CollectionTimeStampEnd): static
    {
        $this->CollectionTimeStampEnd = $CollectionTimeStampEnd;

        return $this;
    }

    public function getCollectionTimeStampStart(): ?string
    {
        return $this->CollectionTimeStampStart;
    }

    public function setCollectionTimeStampStart(?string $CollectionTimeStampStart): static
    {
        $this->CollectionTimeStampStart = $CollectionTimeStampStart;

        return $this;
    }

    public function getContacts(): ?ArrayOfContact
    {
        return $this->Contacts;
    }

    public function setContacts(?ArrayOfContact $Contacts): static
    {
        $this->Contacts = $Contacts;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->Content;
    }

    public function setContent(?string $Content): static
    {
        $this->Content = $Content;

        return $this;
    }

    public function getCostCenter(): ?string
    {
        return $this->CostCenter;
    }

    public function setCostCenter(?string $CostCenter): static
    {
        $this->CostCenter = $CostCenter;

        return $this;
    }

    public function getCustomerOrderNumber(): ?string
    {
        return $this->CustomerOrderNumber;
    }

    public function setCustomerOrderNumber(?string $CustomerOrderNumber): static
    {
        $this->CustomerOrderNumber = $CustomerOrderNumber;

        return $this;
    }

    public function getCustoms(): ?Customs
    {
        return $this->Customs;
    }

    public function setCustoms(?Customs $Customs): static
    {
        $this->Customs = $Customs;

        return $this;
    }

    public function getDeliveryAddress(): ?string
    {
        return $this->DeliveryAddress;
    }

    public function setDeliveryAddress(?string $DeliveryAddress): static
    {
        $this->DeliveryAddress = $DeliveryAddress;

        return $this;
    }

    public function getDeliveryDate(): ?string
    {
        return $this->DeliveryDate;
    }

    public function setDeliveryDate(?string $DeliveryDate): static
    {
        $this->DeliveryDate = $DeliveryDate;

        return $this;
    }

    public function getDownPartnerBarcode(): ?string
    {
        return $this->DownPartnerBarcode;
    }

    public function setDownPartnerBarcode(?string $DownPartnerBarcode): static
    {
        $this->DownPartnerBarcode = $DownPartnerBarcode;

        return $this;
    }

    public function getDownPartnerID(): ?string
    {
        return $this->DownPartnerID;
    }

    public function setDownPartnerID(?string $DownPartnerID): static
    {
        $this->DownPartnerID = $DownPartnerID;

        return $this;
    }

    public function getDownPartnerLocation(): ?string
    {
        return $this->DownPartnerLocation;
    }

    public function setDownPartnerLocation(?string $DownPartnerLocation): static
    {
        $this->DownPartnerLocation = $DownPartnerLocation;

        return $this;
    }

    public function getGroups(): ?ArrayOfGroup
    {
        return $this->Groups;
    }

    public function setGroups(?ArrayOfGroup $Groups): static
    {
        $this->Groups = $Groups;

        return $this;
    }

    public function getIDExpiration(): ?string
    {
        return $this->IDExpiration;
    }

    public function setIDExpiration(?string $IDExpiration): static
    {
        $this->IDExpiration = $IDExpiration;

        return $this;
    }

    public function getIDNumber(): ?string
    {
        return $this->IDNumber;
    }

    public function setIDNumber(?string $IDNumber): static
    {
        $this->IDNumber = $IDNumber;

        return $this;
    }

    public function getIDType(): ?string
    {
        return $this->IDType;
    }

    public function setIDType(?string $IDType): static
    {
        $this->IDType = $IDType;

        return $this;
    }

    public function getProductCodeCollect(): ?string
    {
        return $this->ProductCodeCollect;
    }

    public function setProductCodeCollect(?string $ProductCodeCollect): static
    {
        $this->ProductCodeCollect = $ProductCodeCollect;

        return $this;
    }

    public function getProductOptions(): ?ArrayOfProductOption
    {
        return $this->ProductOptions;
    }

    public function setProductOptions(?ArrayOfProductOption $ProductOptions): static
    {
        $this->ProductOptions = $ProductOptions;

        return $this;
    }

    public function getReceiverDateOfBirth(): ?string
    {
        return $this->ReceiverDateOfBirth;
    }

    public function setReceiverDateOfBirth(?string $ReceiverDateOfBirth): static
    {
        $this->ReceiverDateOfBirth = $ReceiverDateOfBirth;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->Reference;
    }

    public function setReference(?string $Reference): static
    {
        $this->Reference = $Reference;

        return $this;
    }

    public function getReferenceCollect(): ?string
    {
        return $this->ReferenceCollect;
    }

    public function setReferenceCollect(?string $ReferenceCollect): static
    {
        $this->ReferenceCollect = $ReferenceCollect;

        return $this;
    }

    public function getRemark(): ?string
    {
        return $this->Remark;
    }

    public function setRemark(?string $Remark): static
    {
        $this->Remark = $Remark;

        return $this;
    }

    public function getReturnBarcode(): ?string
    {
        return $this->ReturnBarcode;
    }

    public function setReturnBarcode(?string $ReturnBarcode): static
    {
        $this->ReturnBarcode = $ReturnBarcode;

        return $this;
    }

    public function getReturnReference(): ?string
    {
        return $this->ReturnReference;
    }

    public function setReturnReference(?string $ReturnReference): static
    {
        $this->ReturnReference = $ReturnReference;

        return $this;
    }
}
