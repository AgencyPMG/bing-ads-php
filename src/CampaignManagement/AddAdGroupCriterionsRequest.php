<?php

namespace PMG\BingAds\CampaignMangagement;

class AddAdGroupCriterionsRequest
{

    /**
     * @var ArrayOfAdGroupCriterion $AdGroupCriterions
     */
    protected $AdGroupCriterions = null;

    /**
     * @var AdGroupCriterionType $CriterionType
     */
    protected $CriterionType = null;

    /**
     * @param ArrayOfAdGroupCriterion $AdGroupCriterions
     * @param AdGroupCriterionType $CriterionType
     */
    public function __construct($AdGroupCriterions, $CriterionType)
    {
      $this->AdGroupCriterions = $AdGroupCriterions;
      $this->CriterionType = $CriterionType;
    }

    /**
     * @return ArrayOfAdGroupCriterion
     */
    public function getAdGroupCriterions()
    {
      return $this->AdGroupCriterions;
    }

    /**
     * @param ArrayOfAdGroupCriterion $AdGroupCriterions
     * @return \PMG\BingAds\CampaignMangagement\AddAdGroupCriterionsRequest
     */
    public function setAdGroupCriterions($AdGroupCriterions)
    {
      $this->AdGroupCriterions = $AdGroupCriterions;
      return $this;
    }

    /**
     * @return AdGroupCriterionType
     */
    public function getCriterionType()
    {
      return $this->CriterionType;
    }

    /**
     * @param AdGroupCriterionType $CriterionType
     * @return \PMG\BingAds\CampaignMangagement\AddAdGroupCriterionsRequest
     */
    public function setCriterionType($CriterionType)
    {
      $this->CriterionType = $CriterionType;
      return $this;
    }

}
