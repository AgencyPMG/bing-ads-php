<?php

namespace PMG\BingAds\CampaignManagement;

class ProductAudience extends Audience
{

    /**
     * @see \PMG\BingAds\CampaignManagement\ProductAudienceType for valid values
     *
     * @var list $ProductAudienceType
     */
    protected $ProductAudienceType = null;

    /**
     * @var int $TagId
     */
    protected $TagId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return list
     */
    public function getProductAudienceType()
    {
      return $this->ProductAudienceType;
    }

    /**
     * @param list $ProductAudienceType
     * @return \PMG\BingAds\CampaignManagement\ProductAudience
     */
    public function setProductAudienceType($ProductAudienceType)
    {
      $this->ProductAudienceType = $ProductAudienceType;
      return $this;
    }

    /**
     * @return int
     */
    public function getTagId()
    {
      return $this->TagId;
    }

    /**
     * @param int $TagId
     * @return \PMG\BingAds\CampaignManagement\ProductAudience
     */
    public function setTagId($TagId)
    {
      $this->TagId = $TagId;
      return $this;
    }

}
