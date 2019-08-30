<?php

namespace PMG\BingAds\CampaignManagement;

class AddListItemsToSharedListResponse
{

    /**
     * @var ArrayOflong $ListItemIds
     */
    protected $ListItemIds = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOflong $ListItemIds
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($ListItemIds = null, $PartialErrors = null)
    {
    $this->ListItemIds = $ListItemIds;
    $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOflong
     */
    public function getListItemIds()
    {
        return $this->ListItemIds;
    }

    /**
     * @param ArrayOflong $ListItemIds
     * @return \PMG\BingAds\CampaignManagement\AddListItemsToSharedListResponse
     */
    public function setListItemIds($ListItemIds)
    {
        $this->ListItemIds = $ListItemIds;
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
     * @return \PMG\BingAds\CampaignManagement\AddListItemsToSharedListResponse
     */
    public function setPartialErrors($PartialErrors)
    {
        $this->PartialErrors = $PartialErrors;
        return $this;
    }

}
