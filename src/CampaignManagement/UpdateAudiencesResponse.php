<?php

namespace PMG\BingAds\CampaignManagement;

class UpdateAudiencesResponse
{

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
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
     * @return \PMG\BingAds\CampaignManagement\UpdateAudiencesResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
