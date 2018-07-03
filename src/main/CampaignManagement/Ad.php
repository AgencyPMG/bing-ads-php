<?php

namespace PMG\BingAds\CampaignManagement;

class Ad
{

    /**
     * @var string $AdFormatPreference
     */
    protected $AdFormatPreference = null;

    /**
     * @var int $DevicePreference
     */
    protected $DevicePreference = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\AdEditorialStatus for valid values
     *
     * @var string $EditorialStatus
     */
    protected $EditorialStatus = null;

    /**
     * @var ArrayOfAppUrl $FinalAppUrls
     */
    protected $FinalAppUrls = null;

    /**
     * @var ArrayOfstring $FinalMobileUrls
     */
    protected $FinalMobileUrls = null;

    /**
     * @var ArrayOfstring $FinalUrls
     */
    protected $FinalUrls = null;

    /**
     * @var ArrayOfKeyValuePairOfstringstring $ForwardCompatibilityMap
     */
    protected $ForwardCompatibilityMap = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\AdStatus for valid values
     *
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $TrackingUrlTemplate
     */
    protected $TrackingUrlTemplate = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\AdType for valid values
     *
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var CustomParameters $UrlCustomParameters
     */
    protected $UrlCustomParameters = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAdFormatPreference()
    {
      return $this->AdFormatPreference;
    }

    /**
     * @param string $AdFormatPreference
     * @return \PMG\BingAds\CampaignManagement\Ad
     */
    public function setAdFormatPreference($AdFormatPreference)
    {
      $this->AdFormatPreference = $AdFormatPreference;
      return $this;
    }

    /**
     * @return int
     */
    public function getDevicePreference()
    {
      return $this->DevicePreference;
    }

    /**
     * @param int $DevicePreference
     * @return \PMG\BingAds\CampaignManagement\Ad
     */
    public function setDevicePreference($DevicePreference)
    {
      $this->DevicePreference = $DevicePreference;
      return $this;
    }

    /**
     * @return string
     */
    public function getEditorialStatus()
    {
      return $this->EditorialStatus;
    }

    /**
     * @param string $EditorialStatus
     * @return \PMG\BingAds\CampaignManagement\Ad
     */
    public function setEditorialStatus($EditorialStatus)
    {
      $this->EditorialStatus = $EditorialStatus;
      return $this;
    }

    /**
     * @return ArrayOfAppUrl
     */
    public function getFinalAppUrls()
    {
      return $this->FinalAppUrls;
    }

    /**
     * @param ArrayOfAppUrl $FinalAppUrls
     * @return \PMG\BingAds\CampaignManagement\Ad
     */
    public function setFinalAppUrls($FinalAppUrls)
    {
      $this->FinalAppUrls = $FinalAppUrls;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getFinalMobileUrls()
    {
      return $this->FinalMobileUrls;
    }

    /**
     * @param ArrayOfstring $FinalMobileUrls
     * @return \PMG\BingAds\CampaignManagement\Ad
     */
    public function setFinalMobileUrls($FinalMobileUrls)
    {
      $this->FinalMobileUrls = $FinalMobileUrls;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getFinalUrls()
    {
      return $this->FinalUrls;
    }

    /**
     * @param ArrayOfstring $FinalUrls
     * @return \PMG\BingAds\CampaignManagement\Ad
     */
    public function setFinalUrls($FinalUrls)
    {
      $this->FinalUrls = $FinalUrls;
      return $this;
    }

    /**
     * @return ArrayOfKeyValuePairOfstringstring
     */
    public function getForwardCompatibilityMap()
    {
      return $this->ForwardCompatibilityMap;
    }

    /**
     * @param ArrayOfKeyValuePairOfstringstring $ForwardCompatibilityMap
     * @return \PMG\BingAds\CampaignManagement\Ad
     */
    public function setForwardCompatibilityMap($ForwardCompatibilityMap)
    {
      $this->ForwardCompatibilityMap = $ForwardCompatibilityMap;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \PMG\BingAds\CampaignManagement\Ad
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \PMG\BingAds\CampaignManagement\Ad
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingUrlTemplate()
    {
      return $this->TrackingUrlTemplate;
    }

    /**
     * @param string $TrackingUrlTemplate
     * @return \PMG\BingAds\CampaignManagement\Ad
     */
    public function setTrackingUrlTemplate($TrackingUrlTemplate)
    {
      $this->TrackingUrlTemplate = $TrackingUrlTemplate;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \PMG\BingAds\CampaignManagement\Ad
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return CustomParameters
     */
    public function getUrlCustomParameters()
    {
      return $this->UrlCustomParameters;
    }

    /**
     * @param CustomParameters $UrlCustomParameters
     * @return \PMG\BingAds\CampaignManagement\Ad
     */
    public function setUrlCustomParameters($UrlCustomParameters)
    {
      $this->UrlCustomParameters = $UrlCustomParameters;
      return $this;
    }

}
