<?php

namespace PMG\BingAds\CampaignMangagement;

class MediaMetaData
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $MediaType
     */
    protected $MediaType = null;

    /**
     * @var ArrayOfMediaRepresentation $Representations
     */
    protected $Representations = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @param int $Id
     */
    public function __construct($Id)
    {
      $this->Id = $Id;
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
     * @return \PMG\BingAds\CampaignMangagement\MediaMetaData
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getMediaType()
    {
      return $this->MediaType;
    }

    /**
     * @param string $MediaType
     * @return \PMG\BingAds\CampaignMangagement\MediaMetaData
     */
    public function setMediaType($MediaType)
    {
      $this->MediaType = $MediaType;
      return $this;
    }

    /**
     * @return ArrayOfMediaRepresentation
     */
    public function getRepresentations()
    {
      return $this->Representations;
    }

    /**
     * @param ArrayOfMediaRepresentation $Representations
     * @return \PMG\BingAds\CampaignMangagement\MediaMetaData
     */
    public function setRepresentations($Representations)
    {
      $this->Representations = $Representations;
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
     * @return \PMG\BingAds\CampaignMangagement\MediaMetaData
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
