<?php

namespace PMG\BingAds\Reporting;

class GeographicPerformanceReportFilter
{

    /**
     * @var AccountStatusReportFilter $AccountStatus
     */
    protected $AccountStatus = null;

    /**
     * @var AdDistributionReportFilter $AdDistribution
     */
    protected $AdDistribution = null;

    /**
     * @var AdGroupStatusReportFilter $AdGroupStatus
     */
    protected $AdGroupStatus = null;

    /**
     * @var CampaignStatusReportFilter $CampaignStatus
     */
    protected $CampaignStatus = null;

    /**
     * @var ArrayOfstring $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var LanguageReportFilter $Language
     */
    protected $Language = null;

    
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
     * @return \PMG\BingAds\Reporting\GeographicPerformanceReportFilter
     */
    public function setAccountStatus($AccountStatus)
    {
        $this->AccountStatus = $AccountStatus;
        return $this;
    }

    /**
     * @return AdDistributionReportFilter
     */
    public function getAdDistribution()
    {
        return $this->AdDistribution;
    }

    /**
     * @param AdDistributionReportFilter $AdDistribution
     * @return \PMG\BingAds\Reporting\GeographicPerformanceReportFilter
     */
    public function setAdDistribution($AdDistribution)
    {
        $this->AdDistribution = $AdDistribution;
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
     * @return \PMG\BingAds\Reporting\GeographicPerformanceReportFilter
     */
    public function setAdGroupStatus($AdGroupStatus)
    {
        $this->AdGroupStatus = $AdGroupStatus;
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
     * @return \PMG\BingAds\Reporting\GeographicPerformanceReportFilter
     */
    public function setCampaignStatus($CampaignStatus)
    {
        $this->CampaignStatus = $CampaignStatus;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * @param ArrayOfstring $CountryCode
     * @return \PMG\BingAds\Reporting\GeographicPerformanceReportFilter
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;
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
     * @return \PMG\BingAds\Reporting\GeographicPerformanceReportFilter
     */
    public function setLanguage($Language)
    {
        $this->Language = $Language;
        return $this;
    }

}
