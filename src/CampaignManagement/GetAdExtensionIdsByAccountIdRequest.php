<?php

namespace PMG\BingAds\CampaignMangagement;

class GetAdExtensionIdsByAccountIdRequest
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
     * @param int $AccountId
     * @param AdExtensionsTypeFilter $AdExtensionType
     * @param AssociationType $AssociationType
     */
    public function __construct($AccountId, $AdExtensionType, $AssociationType)
    {
      $this->AccountId = $AccountId;
      $this->AdExtensionType = $AdExtensionType;
      $this->AssociationType = $AssociationType;
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
     * @return \PMG\BingAds\CampaignMangagement\GetAdExtensionIdsByAccountIdRequest
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
     * @return \PMG\BingAds\CampaignMangagement\GetAdExtensionIdsByAccountIdRequest
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
     * @return \PMG\BingAds\CampaignMangagement\GetAdExtensionIdsByAccountIdRequest
     */
    public function setAssociationType($AssociationType)
    {
      $this->AssociationType = $AssociationType;
      return $this;
    }

}
