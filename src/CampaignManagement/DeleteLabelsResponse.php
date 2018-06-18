<?php

namespace PMG\BingAds\CampaignMangagement;

class DeleteLabelsResponse
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
     * @return \PMG\BingAds\CampaignMangagement\DeleteLabelsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
