<?php

namespace PMG\BingAds\Reporting;

class AdPerformanceReportFilter
{

    /**
     * @see \PMG\BingAds\Reporting\AccountStatusReportFilter for valid values
     *
     * @var list $AccountStatus
     */
    protected $AccountStatus = null;

    /**
     * @see \PMG\BingAds\Reporting\AdDistributionReportFilter for valid values
     *
     * @var list $AdDistribution
     */
    protected $AdDistribution = null;

    /**
     * @see \PMG\BingAds\Reporting\AdGroupStatusReportFilter for valid values
     *
     * @var list $AdGroupStatus
     */
    protected $AdGroupStatus = null;

    /**
     * @see \PMG\BingAds\Reporting\AdStatusReportFilter for valid values
     *
     * @var list $AdStatus
     */
    protected $AdStatus = null;

    /**
     * @see \PMG\BingAds\Reporting\AdTypeReportFilter for valid values
     *
     * @var list $AdType
     */
    protected $AdType = null;

    /**
     * @see \PMG\BingAds\Reporting\CampaignStatusReportFilter for valid values
     *
     * @var list $CampaignStatus
     */
    protected $CampaignStatus = null;

    /**
     * @see \PMG\BingAds\Reporting\DeviceTypeReportFilter for valid values
     *
     * @var list $DeviceType
     */
    protected $DeviceType = null;

    /**
     * @var ArrayOfstring $LanguageCode
     */
    protected $LanguageCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return list
     */
    public function getAccountStatus()
    {
      return $this->AccountStatus;
    }

    /**
     * @param list $AccountStatus
     * @return \PMG\BingAds\Reporting\AdPerformanceReportFilter
     */
    public function setAccountStatus($AccountStatus)
    {
      $this->AccountStatus = $AccountStatus;
      return $this;
    }

    /**
     * @return list
     */
    public function getAdDistribution()
    {
      return $this->AdDistribution;
    }

    /**
     * @param list $AdDistribution
     * @return \PMG\BingAds\Reporting\AdPerformanceReportFilter
     */
    public function setAdDistribution($AdDistribution)
    {
      $this->AdDistribution = $AdDistribution;
      return $this;
    }

    /**
     * @return list
     */
    public function getAdGroupStatus()
    {
      return $this->AdGroupStatus;
    }

    /**
     * @param list $AdGroupStatus
     * @return \PMG\BingAds\Reporting\AdPerformanceReportFilter
     */
    public function setAdGroupStatus($AdGroupStatus)
    {
      $this->AdGroupStatus = $AdGroupStatus;
      return $this;
    }

    /**
     * @return list
     */
    public function getAdStatus()
    {
      return $this->AdStatus;
    }

    /**
     * @param list $AdStatus
     * @return \PMG\BingAds\Reporting\AdPerformanceReportFilter
     */
    public function setAdStatus($AdStatus)
    {
      $this->AdStatus = $AdStatus;
      return $this;
    }

    /**
     * @return list
     */
    public function getAdType()
    {
      return $this->AdType;
    }

    /**
     * @param list $AdType
     * @return \PMG\BingAds\Reporting\AdPerformanceReportFilter
     */
    public function setAdType($AdType)
    {
      $this->AdType = $AdType;
      return $this;
    }

    /**
     * @return list
     */
    public function getCampaignStatus()
    {
      return $this->CampaignStatus;
    }

    /**
     * @param list $CampaignStatus
     * @return \PMG\BingAds\Reporting\AdPerformanceReportFilter
     */
    public function setCampaignStatus($CampaignStatus)
    {
      $this->CampaignStatus = $CampaignStatus;
      return $this;
    }

    /**
     * @return list
     */
    public function getDeviceType()
    {
      return $this->DeviceType;
    }

    /**
     * @param list $DeviceType
     * @return \PMG\BingAds\Reporting\AdPerformanceReportFilter
     */
    public function setDeviceType($DeviceType)
    {
      $this->DeviceType = $DeviceType;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getLanguageCode()
    {
      return $this->LanguageCode;
    }

    /**
     * @param ArrayOfstring $LanguageCode
     * @return \PMG\BingAds\Reporting\AdPerformanceReportFilter
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

}
