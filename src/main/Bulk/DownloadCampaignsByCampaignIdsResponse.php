<?php

namespace PMG\BingAds\Bulk;

class DownloadCampaignsByCampaignIdsResponse
{

    /**
     * @var string $DownloadRequestId
     */
    protected $DownloadRequestId = null;

    /**
     * @param string $DownloadRequestId
     */
    public function __construct($DownloadRequestId = null)
    {
    $this->DownloadRequestId = $DownloadRequestId;
    }

    /**
     * @return string
     */
    public function getDownloadRequestId()
    {
        return $this->DownloadRequestId;
    }

    /**
     * @param string $DownloadRequestId
     * @return \PMG\BingAds\Bulk\DownloadCampaignsByCampaignIdsResponse
     */
    public function setDownloadRequestId($DownloadRequestId)
    {
        $this->DownloadRequestId = $DownloadRequestId;
        return $this;
    }

}
