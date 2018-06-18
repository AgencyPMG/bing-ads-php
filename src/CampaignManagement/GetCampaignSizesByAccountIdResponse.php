<?php

namespace PMG\BingAds\CampaignMangagement;

class GetCampaignSizesByAccountIdResponse
{

    /**
     * @var ArrayOfCampaignSize $CampaignSizes
     */
    protected $CampaignSizes = null;

    /**
     * @param ArrayOfCampaignSize $CampaignSizes
     */
    public function __construct($CampaignSizes)
    {
      $this->CampaignSizes = $CampaignSizes;
    }

    /**
     * @return ArrayOfCampaignSize
     */
    public function getCampaignSizes()
    {
      return $this->CampaignSizes;
    }

    /**
     * @param ArrayOfCampaignSize $CampaignSizes
     * @return \PMG\BingAds\CampaignMangagement\GetCampaignSizesByAccountIdResponse
     */
    public function setCampaignSizes($CampaignSizes)
    {
      $this->CampaignSizes = $CampaignSizes;
      return $this;
    }

}
