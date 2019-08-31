<?php

namespace PMG\BingAds\CampaignManagement;

class GetSharedEntityAssociationsBySharedEntityIdsRequest
{

    /**
     * @var string $EntityType
     */
    protected $EntityType = null;

    /**
     * @var ArrayOflong $SharedEntityIds
     */
    protected $SharedEntityIds = null;

    /**
     * @var string $SharedEntityType
     */
    protected $SharedEntityType = null;

    /**
     * @param string $EntityType
     * @param ArrayOflong $SharedEntityIds
     * @param string $SharedEntityType
     */
    public function __construct($EntityType = null, $SharedEntityIds = null, $SharedEntityType = null)
    {
    $this->EntityType = $EntityType;
    $this->SharedEntityIds = $SharedEntityIds;
    $this->SharedEntityType = $SharedEntityType;
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
     * @return \PMG\BingAds\CampaignManagement\GetSharedEntityAssociationsBySharedEntityIdsRequest
     */
    public function setEntityType($EntityType)
    {
        $this->EntityType = $EntityType;
        return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getSharedEntityIds()
    {
        return $this->SharedEntityIds;
    }

    /**
     * @param ArrayOflong $SharedEntityIds
     * @return \PMG\BingAds\CampaignManagement\GetSharedEntityAssociationsBySharedEntityIdsRequest
     */
    public function setSharedEntityIds($SharedEntityIds)
    {
        $this->SharedEntityIds = $SharedEntityIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getSharedEntityType()
    {
        return $this->SharedEntityType;
    }

    /**
     * @param string $SharedEntityType
     * @return \PMG\BingAds\CampaignManagement\GetSharedEntityAssociationsBySharedEntityIdsRequest
     */
    public function setSharedEntityType($SharedEntityType)
    {
        $this->SharedEntityType = $SharedEntityType;
        return $this;
    }

}
