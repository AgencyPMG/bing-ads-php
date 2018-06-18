<?php

namespace PMG\BingAds\CampaignMangagement;

class GetCampaignIdsByBudgetIdsResponse
{

    /**
     * @var ArrayOfIdCollection $CampaignIdCollection
     */
    protected $CampaignIdCollection = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfIdCollection $CampaignIdCollection
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($CampaignIdCollection, $PartialErrors)
    {
      $this->CampaignIdCollection = $CampaignIdCollection;
      $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfIdCollection
     */
    public function getCampaignIdCollection()
    {
      return $this->CampaignIdCollection;
    }

    /**
     * @param ArrayOfIdCollection $CampaignIdCollection
     * @return \PMG\BingAds\CampaignMangagement\GetCampaignIdsByBudgetIdsResponse
     */
    public function setCampaignIdCollection($CampaignIdCollection)
    {
      $this->CampaignIdCollection = $CampaignIdCollection;
      return $this;
    }

    /**
     * @return ArrayOfBatchError
     */
    public function getPartialErrors()
    {
      return $this->PartialErrors;
    }

    /**
     * @param ArrayOfBatchError $PartialErrors
     * @return \PMG\BingAds\CampaignMangagement\GetCampaignIdsByBudgetIdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
