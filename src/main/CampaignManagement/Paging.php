<?php

namespace PMG\BingAds\CampaignManagement;

class Paging
{

    /**
     * @var int $Index
     */
    protected $Index = null;

    /**
     * @var int $Size
     */
    protected $Size = null;

    /**
     * @param int $Index
     * @param int $Size
     */
    public function __construct($Index = null, $Size = null)
    {
    $this->Index = $Index;
    $this->Size = $Size;
    }

    /**
     * @return int
     */
    public function getIndex()
    {
        return $this->Index;
    }

    /**
     * @param int $Index
     * @return \PMG\BingAds\CampaignManagement\Paging
     */
    public function setIndex($Index)
    {
        $this->Index = $Index;
        return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->Size;
    }

    /**
     * @param int $Size
     * @return \PMG\BingAds\CampaignManagement\Paging
     */
    public function setSize($Size)
    {
        $this->Size = $Size;
        return $this;
    }

}
