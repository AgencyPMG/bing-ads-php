<?php

namespace PMG\BingAds\CampaignMangagement;

class PriceAdExtension extends AdExtension
{

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @var PriceExtensionType $PriceExtensionType
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
     * @param PriceExtensionType $PriceExtensionType
     */
    public function __construct($PriceExtensionType)
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
     * @return \PMG\BingAds\CampaignMangagement\PriceAdExtension
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

    /**
     * @return PriceExtensionType
     */
    public function getPriceExtensionType()
    {
      return $this->PriceExtensionType;
    }

    /**
     * @param PriceExtensionType $PriceExtensionType
     * @return \PMG\BingAds\CampaignMangagement\PriceAdExtension
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
     * @return \PMG\BingAds\CampaignMangagement\PriceAdExtension
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
     * @return \PMG\BingAds\CampaignMangagement\PriceAdExtension
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
     * @return \PMG\BingAds\CampaignMangagement\PriceAdExtension
     */
    public function setUrlCustomParameters($UrlCustomParameters)
    {
      $this->UrlCustomParameters = $UrlCustomParameters;
      return $this;
    }

}
