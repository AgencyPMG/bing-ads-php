<?php

namespace PMG\BingAds\CampaignMangagement;

class DurationGoal extends ConversionGoal
{

    /**
     * @var int $MinimumDurationInSeconds
     */
    protected $MinimumDurationInSeconds = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getMinimumDurationInSeconds()
    {
      return $this->MinimumDurationInSeconds;
    }

    /**
     * @param int $MinimumDurationInSeconds
     * @return \PMG\BingAds\CampaignMangagement\DurationGoal
     */
    public function setMinimumDurationInSeconds($MinimumDurationInSeconds)
    {
      $this->MinimumDurationInSeconds = $MinimumDurationInSeconds;
      return $this;
    }

}
