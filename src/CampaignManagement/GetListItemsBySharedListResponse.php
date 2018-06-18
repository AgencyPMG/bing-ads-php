<?php

namespace PMG\BingAds\CampaignMangagement;

class GetListItemsBySharedListResponse
{

    /**
     * @var ArrayOfSharedListItem $ListItems
     */
    protected $ListItems = null;

    /**
     * @param ArrayOfSharedListItem $ListItems
     */
    public function __construct($ListItems)
    {
      $this->ListItems = $ListItems;
    }

    /**
     * @return ArrayOfSharedListItem
     */
    public function getListItems()
    {
      return $this->ListItems;
    }

    /**
     * @param ArrayOfSharedListItem $ListItems
     * @return \PMG\BingAds\CampaignMangagement\GetListItemsBySharedListResponse
     */
    public function setListItems($ListItems)
    {
      $this->ListItems = $ListItems;
      return $this;
    }

}
