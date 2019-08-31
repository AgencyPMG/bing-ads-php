<?php

namespace PMG\BingAds\CampaignManagement;

class DeleteLabelsResponse
{

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($PartialErrors = null)
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
     * @return \PMG\BingAds\CampaignManagement\DeleteLabelsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
        $this->PartialErrors = $PartialErrors;
        return $this;
    }

}
