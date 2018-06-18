<?php

namespace PMG\BingAds\CampaignMangagement;

class ImageAdExtension extends AdExtension
{

    /**
     * @var string $AlternativeText
     */
    protected $AlternativeText = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $DestinationUrl
     */
    protected $DestinationUrl = null;

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
     * @var ArrayOflong $ImageMediaIds
     */
    protected $ImageMediaIds = null;

    /**
     * @var string $TrackingUrlTemplate
     */
    protected $TrackingUrlTemplate = null;

    /**
     * @var CustomParameters $UrlCustomParameters
     */
    protected $UrlCustomParameters = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getAlternativeText()
    {
      return $this->AlternativeText;
    }

    /**
     * @param string $AlternativeText
     * @return \PMG\BingAds\CampaignMangagement\ImageAdExtension
     */
    public function setAlternativeText($AlternativeText)
    {
      $this->AlternativeText = $AlternativeText;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \PMG\BingAds\CampaignMangagement\ImageAdExtension
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationUrl()
    {
      return $this->DestinationUrl;
    }

    /**
     * @param string $DestinationUrl
     * @return \PMG\BingAds\CampaignMangagement\ImageAdExtension
     */
    public function setDestinationUrl($DestinationUrl)
    {
      $this->DestinationUrl = $DestinationUrl;
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
     * @return \PMG\BingAds\CampaignMangagement\ImageAdExtension
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
     * @return \PMG\BingAds\CampaignMangagement\ImageAdExtension
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
     * @return \PMG\BingAds\CampaignMangagement\ImageAdExtension
     */
    public function setFinalUrls($FinalUrls)
    {
      $this->FinalUrls = $FinalUrls;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getImageMediaIds()
    {
      return $this->ImageMediaIds;
    }

    /**
     * @param ArrayOflong $ImageMediaIds
     * @return \PMG\BingAds\CampaignMangagement\ImageAdExtension
     */
    public function setImageMediaIds($ImageMediaIds)
    {
      $this->ImageMediaIds = $ImageMediaIds;
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
     * @return \PMG\BingAds\CampaignMangagement\ImageAdExtension
     */
    public function setTrackingUrlTemplate($TrackingUrlTemplate)
    {
      $this->TrackingUrlTemplate = $TrackingUrlTemplate;
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
     * @return \PMG\BingAds\CampaignMangagement\ImageAdExtension
     */
    public function setUrlCustomParameters($UrlCustomParameters)
    {
      $this->UrlCustomParameters = $UrlCustomParameters;
      return $this;
    }

}
