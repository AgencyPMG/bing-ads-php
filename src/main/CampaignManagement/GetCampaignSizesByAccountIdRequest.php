<?php

namespace PMG\BingAds\CampaignManagement;

class GetCampaignSizesByAccountIdRequest
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var ArrayOflong $CampaignIds
     */
    protected $CampaignIds = null;

    /**
     * @param int $AccountId
     * @param ArrayOflong $CampaignIds
     */
    public function __construct($AccountId = null, $CampaignIds = null)
    {
    $this->AccountId = $AccountId;
    $this->CampaignIds = $CampaignIds;
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
     * @return \PMG\BingAds\CampaignManagement\GetCampaignSizesByAccountIdRequest
     */
    public function setAccountId($AccountId)
    {
        $this->AccountId = $AccountId;
        return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getCampaignIds()
    {
        return $this->CampaignIds;
    }

    /**
     * @param ArrayOflong $CampaignIds
     * @return \PMG\BingAds\CampaignManagement\GetCampaignSizesByAccountIdRequest
     */
    public function setCampaignIds($CampaignIds)
    {
        $this->CampaignIds = $CampaignIds;
        return $this;
    }

}
