<?php

namespace PMG\BingAds\CampaignMangagement;

class GetAudiencesByIdsRequest
{

    /**
     * @var ArrayOflong $AudienceIds
     */
    protected $AudienceIds = null;

    /**
     * @var AudienceType $Type
     */
    protected $Type = null;

    /**
     * @param ArrayOflong $AudienceIds
     * @param AudienceType $Type
     */
    public function __construct($AudienceIds, $Type)
    {
      $this->AudienceIds = $AudienceIds;
      $this->Type = $Type;
    }

    /**
     * @return ArrayOflong
     */
    public function getAudienceIds()
    {
      return $this->AudienceIds;
    }

    /**
     * @param ArrayOflong $AudienceIds
     * @return \PMG\BingAds\CampaignMangagement\GetAudiencesByIdsRequest
     */
    public function setAudienceIds($AudienceIds)
    {
      $this->AudienceIds = $AudienceIds;
      return $this;
    }

    /**
     * @return AudienceType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param AudienceType $Type
     * @return \PMG\BingAds\CampaignMangagement\GetAudiencesByIdsRequest
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
