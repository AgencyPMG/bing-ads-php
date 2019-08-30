<?php

namespace PMG\BingAds\CampaignManagement;

class SetAdExtensionsAssociationsResponse
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
     * @return \PMG\BingAds\CampaignManagement\SetAdExtensionsAssociationsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
        $this->PartialErrors = $PartialErrors;
        return $this;
    }

}
