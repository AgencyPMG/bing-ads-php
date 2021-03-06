<?php

namespace PMG\BingAds\Reporting;

class DSASearchQueryPerformanceReportFilter
{

    /**
     * @var AccountStatusReportFilter $AccountStatus
     */
    protected $AccountStatus = null;

    /**
     * @var AdGroupStatusReportFilter $AdGroupStatus
     */
    protected $AdGroupStatus = null;

    /**
     * @var AdStatusReportFilter $AdStatus
     */
    protected $AdStatus = null;

    /**
     * @var CampaignStatusReportFilter $CampaignStatus
     */
    protected $CampaignStatus = null;

    /**
     * @var boolean $ExcludeZeroClicks
     */
    protected $ExcludeZeroClicks = null;

    /**
     * @var boolean $FeedUrl
     */
    protected $FeedUrl = null;

    /**
     * @var LanguageReportFilter $Language
     */
    protected $Language = null;

    /**
     * @var ArrayOfstring $SearchQueries
     */
    protected $SearchQueries = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountStatusReportFilter
     */
    public function getAccountStatus()
    {
        return $this->AccountStatus;
    }

    /**
     * @param AccountStatusReportFilter $AccountStatus
     * @return \PMG\BingAds\Reporting\DSASearchQueryPerformanceReportFilter
     */
    public function setAccountStatus($AccountStatus)
    {
        $this->AccountStatus = $AccountStatus;
        return $this;
    }

    /**
     * @return AdGroupStatusReportFilter
     */
    public function getAdGroupStatus()
    {
        return $this->AdGroupStatus;
    }

    /**
     * @param AdGroupStatusReportFilter $AdGroupStatus
     * @return \PMG\BingAds\Reporting\DSASearchQueryPerformanceReportFilter
     */
    public function setAdGroupStatus($AdGroupStatus)
    {
        $this->AdGroupStatus = $AdGroupStatus;
        return $this;
    }

    /**
     * @return AdStatusReportFilter
     */
    public function getAdStatus()
    {
        return $this->AdStatus;
    }

    /**
     * @param AdStatusReportFilter $AdStatus
     * @return \PMG\BingAds\Reporting\DSASearchQueryPerformanceReportFilter
     */
    public function setAdStatus($AdStatus)
    {
        $this->AdStatus = $AdStatus;
        return $this;
    }

    /**
     * @return CampaignStatusReportFilter
     */
    public function getCampaignStatus()
    {
        return $this->CampaignStatus;
    }

    /**
     * @param CampaignStatusReportFilter $CampaignStatus
     * @return \PMG\BingAds\Reporting\DSASearchQueryPerformanceReportFilter
     */
    public function setCampaignStatus($CampaignStatus)
    {
        $this->CampaignStatus = $CampaignStatus;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeZeroClicks()
    {
        return $this->ExcludeZeroClicks;
    }

    /**
     * @param boolean $ExcludeZeroClicks
     * @return \PMG\BingAds\Reporting\DSASearchQueryPerformanceReportFilter
     */
    public function setExcludeZeroClicks($ExcludeZeroClicks)
    {
        $this->ExcludeZeroClicks = $ExcludeZeroClicks;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getFeedUrl()
    {
        return $this->FeedUrl;
    }

    /**
     * @param boolean $FeedUrl
     * @return \PMG\BingAds\Reporting\DSASearchQueryPerformanceReportFilter
     */
    public function setFeedUrl($FeedUrl)
    {
        $this->FeedUrl = $FeedUrl;
        return $this;
    }

    /**
     * @return LanguageReportFilter
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param LanguageReportFilter $Language
     * @return \PMG\BingAds\Reporting\DSASearchQueryPerformanceReportFilter
     */
    public function setLanguage($Language)
    {
        $this->Language = $Language;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getSearchQueries()
    {
        return $this->SearchQueries;
    }

    /**
     * @param ArrayOfstring $SearchQueries
     * @return \PMG\BingAds\Reporting\DSASearchQueryPerformanceReportFilter
     */
    public function setSearchQueries($SearchQueries)
    {
        $this->SearchQueries = $SearchQueries;
        return $this;
    }

}
