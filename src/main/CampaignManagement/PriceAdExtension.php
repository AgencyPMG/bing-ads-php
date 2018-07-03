<?php

namespace PMG\BingAds\CampaignManagement;

class PriceAdExtension extends AdExtension
{

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\PriceExtensionType for valid values
     *
     * @var string $PriceExtensionType
     */
    protected $PriceExtensionType = null;

    /**
     * @var ArrayOfPriceTableRow $TableRows
     */
    protected $TableRows = null;

    /**
     * @var string $TrackingUrlTemplate
     */
    protected $TrackingUrlTemplate = null;

    /**
     * @var CustomParameters $UrlCustomParameters
     */
    protected $UrlCustomParameters = null;

    /**
     * @param string $PriceExtensionType
     */
    public function __construct($PriceExtensionType = null)
    {
      parent::__construct();
      $this->PriceExtensionType = $PriceExtensionType;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string $Language
     * @return \PMG\BingAds\CampaignManagement\PriceAdExtension
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

    /**
     * @return string
     */
    public function getPriceExtensionType()
    {
      return $this->PriceExtensionType;
    }

    /**
     * @param string $PriceExtensionType
     * @return \PMG\BingAds\CampaignManagement\PriceAdExtension
     */
    public function setPriceExtensionType($PriceExtensionType)
    {
      $this->PriceExtensionType = $PriceExtensionType;
      return $this;
    }

    /**
     * @return ArrayOfPriceTableRow
     */
    public function getTableRows()
    {
      return $this->TableRows;
    }

    /**
     * @param ArrayOfPriceTableRow $TableRows
     * @return \PMG\BingAds\CampaignManagement\PriceAdExtension
     */
    public function setTableRows($TableRows)
    {
      $this->TableRows = $TableRows;
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
     * @return \PMG\BingAds\CampaignManagement\PriceAdExtension
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
     * @return \PMG\BingAds\CampaignManagement\PriceAdExtension
     */
    public function setUrlCustomParameters($UrlCustomParameters)
    {
      $this->UrlCustomParameters = $UrlCustomParameters;
      return $this;
    }

}
