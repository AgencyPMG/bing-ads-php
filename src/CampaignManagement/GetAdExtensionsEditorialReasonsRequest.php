<?php

namespace PMG\BingAds\CampaignMangagement;

class GetAdExtensionsEditorialReasonsRequest
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var ArrayOfAdExtensionIdToEntityIdAssociation $AdExtensionIdToEntityIdAssociations
     */
    protected $AdExtensionIdToEntityIdAssociations = null;

    /**
     * @var AssociationType $AssociationType
     */
    protected $AssociationType = null;

    /**
     * @param int $AccountId
     * @param ArrayOfAdExtensionIdToEntityIdAssociation $AdExtensionIdToEntityIdAssociations
     * @param AssociationType $AssociationType
     */
    public function __construct($AccountId, $AdExtensionIdToEntityIdAssociations, $AssociationType)
    {
      $this->AccountId = $AccountId;
      $this->AdExtensionIdToEntityIdAssociations = $AdExtensionIdToEntityIdAssociations;
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
     * @return \PMG\BingAds\CampaignMangagement\GetAdExtensionsEditorialReasonsRequest
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
      return $this;
    }

    /**
     * @return ArrayOfAdExtensionIdToEntityIdAssociation
     */
    public function getAdExtensionIdToEntityIdAssociations()
    {
      return $this->AdExtensionIdToEntityIdAssociations;
    }

    /**
     * @param ArrayOfAdExtensionIdToEntityIdAssociation $AdExtensionIdToEntityIdAssociations
     * @return \PMG\BingAds\CampaignMangagement\GetAdExtensionsEditorialReasonsRequest
     */
    public function setAdExtensionIdToEntityIdAssociations($AdExtensionIdToEntityIdAssociations)
    {
      $this->AdExtensionIdToEntityIdAssociations = $AdExtensionIdToEntityIdAssociations;
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
     * @return \PMG\BingAds\CampaignMangagement\GetAdExtensionsEditorialReasonsRequest
     */
    public function setAssociationType($AssociationType)
    {
      $this->AssociationType = $AssociationType;
      return $this;
    }

}
