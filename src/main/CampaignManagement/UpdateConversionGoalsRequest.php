<?php

namespace PMG\BingAds\CampaignManagement;

class UpdateConversionGoalsRequest
{

    /**
     * @var ArrayOfConversionGoal $ConversionGoals
     */
    protected $ConversionGoals = null;

    /**
     * @param ArrayOfConversionGoal $ConversionGoals
     */
    public function __construct($ConversionGoals = null)
    {
    $this->ConversionGoals = $ConversionGoals;
    }

    /**
     * @return ArrayOfConversionGoal
     */
    public function getConversionGoals()
    {
        return $this->ConversionGoals;
    }

    /**
     * @param ArrayOfConversionGoal $ConversionGoals
     * @return \PMG\BingAds\CampaignManagement\UpdateConversionGoalsRequest
     */
    public function setConversionGoals($ConversionGoals)
    {
        $this->ConversionGoals = $ConversionGoals;
        return $this;
    }

}
