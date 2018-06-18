<?php

namespace PMG\BingAds\CampaignMangagement;

class AddCampaignsResponse
{

    /**
     * @var ArrayOfNullableOflong $CampaignIds
     */
    protected $CampaignIds = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfNullableOflong $CampaignIds
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($CampaignIds, $PartialErrors)
    {
      $this->CampaignIds = $CampaignIds;
      $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfNullableOflong
     */
    public function getCampaignIds()
    {
      return $this->CampaignIds;
    }

    /**
     * @param ArrayOfNullableOflong $CampaignIds
     * @return \PMG\BingAds\CampaignMangagement\AddCampaignsResponse
     */
    public function setCampaignIds($CampaignIds)
    {
      $this->CampaignIds = $CampaignIds;
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
     * @return \PMG\BingAds\CampaignMangagement\AddCampaignsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
