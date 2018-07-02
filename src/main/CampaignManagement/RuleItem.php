<?php

namespace PMG\BingAds\CampaignManagement;

class RuleItem
{

    /**
     * @var string $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \PMG\BingAds\CampaignManagement\RuleItem
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
