<?php

namespace PMG\BingAds\CampaignManagement;

class GetAdExtensionsAssociationsRequest
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var AdExtensionsTypeFilter $AdExtensionType
     */
    protected $AdExtensionType = null;

    /**
     * @var AssociationType $AssociationType
     */
    protected $AssociationType = null;

    /**
     * @var ArrayOflong $EntityIds
     */
    protected $EntityIds = null;

    /**
     * @var AdExtensionAdditionalField $ReturnAdditionalFields
     */
    protected $ReturnAdditionalFields = null;

    /**
     * @param int $AccountId
     * @param AdExtensionsTypeFilter $AdExtensionType
     * @param AssociationType $AssociationType
     * @param ArrayOflong $EntityIds
     * @param AdExtensionAdditionalField $ReturnAdditionalFields
     */
    public function __construct($AccountId = null, $AdExtensionType = null, $AssociationType = null, $EntityIds = null, $ReturnAdditionalFields = null)
    {
      $this->AccountId = $AccountId;
      $this->AdExtensionType = $AdExtensionType;
      $this->AssociationType = $AssociationType;
      $this->EntityIds = $EntityIds;
      $this->ReturnAdditionalFields = $ReturnAdditionalFields;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->AccountId;
    }

    /**
     * @param int $AccountId
     * @return \PMG\BingAds\CampaignManagement\GetAdExtensionsAssociationsRequest
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
      return $this;
    }

    /**
     * @return AdExtensionsTypeFilter
     */
    public function getAdExtensionType()
    {
      return $this->AdExtensionType;
    }

    /**
     * @param AdExtensionsTypeFilter $AdExtensionType
     * @return \PMG\BingAds\CampaignManagement\GetAdExtensionsAssociationsRequest
     */
    public function setAdExtensionType($AdExtensionType)
    {
      $this->AdExtensionType = $AdExtensionType;
      return $this;
    }

    /**
     * @return AssociationType
     */
    public function getAssociationType()
    {
      return $this->AssociationType;
    }

    /**
     * @param AssociationType $AssociationType
     * @return \PMG\BingAds\CampaignManagement\GetAdExtensionsAssociationsRequest
     */
    public function setAssociationType($AssociationType)
    {
      $this->AssociationType = $AssociationType;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getEntityIds()
    {
      return $this->EntityIds;
    }

    /**
     * @param ArrayOflong $EntityIds
     * @return \PMG\BingAds\CampaignManagement\GetAdExtensionsAssociationsRequest
     */
    public function setEntityIds($EntityIds)
    {
      $this->EntityIds = $EntityIds;
      return $this;
    }

    /**
     * @return AdExtensionAdditionalField
     */
    public function getReturnAdditionalFields()
    {
      return $this->ReturnAdditionalFields;
    }

    /**
     * @param AdExtensionAdditionalField $ReturnAdditionalFields
     * @return \PMG\BingAds\CampaignManagement\GetAdExtensionsAssociationsRequest
     */
    public function setReturnAdditionalFields($ReturnAdditionalFields)
    {
      $this->ReturnAdditionalFields = $ReturnAdditionalFields;
      return $this;
    }

}
