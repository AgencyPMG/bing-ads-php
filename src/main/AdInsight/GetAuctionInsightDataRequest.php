<?php

namespace PMG\BingAds\AdInsight;

class GetAuctionInsightDataRequest
{

    /**
     * @see \PMG\BingAds\AdInsight\EntityType for valid values
     *
     * @var string $EntityType
     */
    protected $EntityType = null;

    /**
     * @var ArrayOflong $EntityIds
     */
    protected $EntityIds = null;

    /**
     * @var ArrayOfSearchParameter $SearchParameters
     */
    protected $SearchParameters = null;

    /**
     * @param string $EntityType
     * @param ArrayOflong $EntityIds
     * @param ArrayOfSearchParameter $SearchParameters
     */
    public function __construct($EntityType = null, $EntityIds = null, $SearchParameters = null)
    {
      $this->EntityType = $EntityType;
      $this->EntityIds = $EntityIds;
      $this->SearchParameters = $SearchParameters;
    }

    /**
     * @return string
     */
    public function getEntityType()
    {
      return $this->EntityType;
    }

    /**
     * @param string $EntityType
     * @return \PMG\BingAds\AdInsight\GetAuctionInsightDataRequest
     */
    public function setEntityType($EntityType)
    {
      $this->EntityType = $EntityType;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getEntityIds()
    {
      return $this->EntityIds;
    }

    /**
     * @param ArrayOflong $EntityIds
     * @return \PMG\BingAds\AdInsight\GetAuctionInsightDataRequest
     */
    public function setEntityIds($EntityIds)
    {
      $this->EntityIds = $EntityIds;
      return $this;
    }

    /**
     * @return ArrayOfSearchParameter
     */
    public function getSearchParameters()
    {
      return $this->SearchParameters;
    }

    /**
     * @param ArrayOfSearchParameter $SearchParameters
     * @return \PMG\BingAds\AdInsight\GetAuctionInsightDataRequest
     */
    public function setSearchParameters($SearchParameters)
    {
      $this->SearchParameters = $SearchParameters;
      return $this;
    }

}
