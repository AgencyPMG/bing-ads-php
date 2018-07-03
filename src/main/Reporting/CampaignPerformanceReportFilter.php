<?php

namespace PMG\BingAds\Reporting;

class CampaignPerformanceReportFilter
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
     * @see \PMG\BingAds\Reporting\DeviceOSReportFilter for valid values
     *
     * @var list $DeviceOS
     */
    protected $DeviceOS = null;

    /**
     * @see \PMG\BingAds\Reporting\DeviceTypeReportFilter for valid values
     *
     * @var list $DeviceType
     */
    protected $DeviceType = null;

    /**
     * @see \PMG\BingAds\Reporting\CampaignStatusReportFilter for valid values
     *
     * @var list $Status
     */
    protected $Status = null;

    
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
     * @return \PMG\BingAds\Reporting\CampaignPerformanceReportFilter
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
     * @return \PMG\BingAds\Reporting\CampaignPerformanceReportFilter
     */
    public function setAdDistribution($AdDistribution)
    {
      $this->AdDistribution = $AdDistribution;
      return $this;
    }

    /**
     * @return list
     */
    public function getDeviceOS()
    {
      return $this->DeviceOS;
    }

    /**
     * @param list $DeviceOS
     * @return \PMG\BingAds\Reporting\CampaignPerformanceReportFilter
     */
    public function setDeviceOS($DeviceOS)
    {
      $this->DeviceOS = $DeviceOS;
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
     * @return \PMG\BingAds\Reporting\CampaignPerformanceReportFilter
     */
    public function setDeviceType($DeviceType)
    {
      $this->DeviceType = $DeviceType;
      return $this;
    }

    /**
     * @return list
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param list $Status
     * @return \PMG\BingAds\Reporting\CampaignPerformanceReportFilter
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
