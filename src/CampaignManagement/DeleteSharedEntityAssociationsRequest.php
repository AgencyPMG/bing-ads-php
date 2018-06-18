<?php

namespace PMG\BingAds\CampaignMangagement;

class DeleteSharedEntityAssociationsRequest
{

    /**
     * @var ArrayOfSharedEntityAssociation $Associations
     */
    protected $Associations = null;

    /**
     * @param ArrayOfSharedEntityAssociation $Associations
     */
    public function __construct($Associations)
    {
      $this->Associations = $Associations;
    }

    /**
     * @return ArrayOfSharedEntityAssociation
     */
    public function getAssociations()
    {
      return $this->Associations;
    }

    /**
     * @param ArrayOfSharedEntityAssociation $Associations
     * @return \PMG\BingAds\CampaignMangagement\DeleteSharedEntityAssociationsRequest
     */
    public function setAssociations($Associations)
    {
      $this->Associations = $Associations;
      return $this;
    }

}