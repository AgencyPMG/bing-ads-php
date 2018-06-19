<?php

namespace PMG\BingAds\CampaignManagement;

class LocationIntentCriterion extends Criterion
{

    /**
     * @var IntentOption $IntentOption
     */
    protected $IntentOption = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return IntentOption
     */
    public function getIntentOption()
    {
      return $this->IntentOption;
    }

    /**
     * @param IntentOption $IntentOption
     * @return \PMG\BingAds\CampaignManagement\LocationIntentCriterion
     */
    public function setIntentOption($IntentOption)
    {
      $this->IntentOption = $IntentOption;
      return $this;
    }

}
