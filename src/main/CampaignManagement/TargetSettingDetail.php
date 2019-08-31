<?php

namespace PMG\BingAds\CampaignManagement;

class TargetSettingDetail
{

    /**
     * @var CriterionTypeGroup $CriterionTypeGroup
     */
    protected $CriterionTypeGroup = null;

    /**
     * @var boolean $TargetAndBid
     */
    protected $TargetAndBid = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CriterionTypeGroup
     */
    public function getCriterionTypeGroup()
    {
        return $this->CriterionTypeGroup;
    }

    /**
     * @param CriterionTypeGroup $CriterionTypeGroup
     * @return \PMG\BingAds\CampaignManagement\TargetSettingDetail
     */
    public function setCriterionTypeGroup($CriterionTypeGroup)
    {
        $this->CriterionTypeGroup = $CriterionTypeGroup;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTargetAndBid()
    {
        return $this->TargetAndBid;
    }

    /**
     * @param boolean $TargetAndBid
     * @return \PMG\BingAds\CampaignManagement\TargetSettingDetail
     */
    public function setTargetAndBid($TargetAndBid)
    {
        $this->TargetAndBid = $TargetAndBid;
        return $this;
    }

}
