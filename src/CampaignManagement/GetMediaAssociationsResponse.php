<?php

namespace PMG\BingAds\CampaignMangagement;

class GetMediaAssociationsResponse
{

    /**
     * @var ArrayOfArrayOfMediaAssociation $MediaAssociations
     */
    protected $MediaAssociations = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfArrayOfMediaAssociation $MediaAssociations
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($MediaAssociations, $PartialErrors)
    {
      $this->MediaAssociations = $MediaAssociations;
      $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfArrayOfMediaAssociation
     */
    public function getMediaAssociations()
    {
      return $this->MediaAssociations;
    }

    /**
     * @param ArrayOfArrayOfMediaAssociation $MediaAssociations
     * @return \PMG\BingAds\CampaignMangagement\GetMediaAssociationsResponse
     */
    public function setMediaAssociations($MediaAssociations)
    {
      $this->MediaAssociations = $MediaAssociations;
      return $this;
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
     * @return \PMG\BingAds\CampaignMangagement\GetMediaAssociationsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
