<?php

namespace PMG\BingAds\CampaignManagement;

class AddAdsRequest
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var ArrayOfAd $Ads
     */
    protected $Ads = null;

    /**
     * @param int $AdGroupId
     * @param ArrayOfAd $Ads
     */
    public function __construct($AdGroupId = null, $Ads = null)
    {
    $this->AdGroupId = $AdGroupId;
    $this->Ads = $Ads;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
        return $this->AdGroupId;
    }

    /**
     * @param int $AdGroupId
     * @return \PMG\BingAds\CampaignManagement\AddAdsRequest
     */
    public function setAdGroupId($AdGroupId)
    {
        $this->AdGroupId = $AdGroupId;
        return $this;
    }

    /**
     * @return ArrayOfAd
     */
    public function getAds()
    {
        return $this->Ads;
    }

    /**
     * @param ArrayOfAd $Ads
     * @return \PMG\BingAds\CampaignManagement\AddAdsRequest
     */
    public function setAds($Ads)
    {
        $this->Ads = $Ads;
        return $this;
    }

}
