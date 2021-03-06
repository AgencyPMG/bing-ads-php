<?php

namespace PMG\BingAds\CampaignManagement;

class UetTag
{

    /**
     * @var CustomerShare $CustomerShare
     */
    protected $CustomerShare = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $TrackingNoScript
     */
    protected $TrackingNoScript = null;

    /**
     * @var string $TrackingScript
     */
    protected $TrackingScript = null;

    /**
     * @var UetTagTrackingStatus $TrackingStatus
     */
    protected $TrackingStatus = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomerShare
     */
    public function getCustomerShare()
    {
        return $this->CustomerShare;
    }

    /**
     * @param CustomerShare $CustomerShare
     * @return \PMG\BingAds\CampaignManagement\UetTag
     */
    public function setCustomerShare($CustomerShare)
    {
        $this->CustomerShare = $CustomerShare;
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
     * @return \PMG\BingAds\CampaignManagement\UetTag
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
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
     * @return \PMG\BingAds\CampaignManagement\UetTag
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return \PMG\BingAds\CampaignManagement\UetTag
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNoScript()
    {
        return $this->TrackingNoScript;
    }

    /**
     * @param string $TrackingNoScript
     * @return \PMG\BingAds\CampaignManagement\UetTag
     */
    public function setTrackingNoScript($TrackingNoScript)
    {
        $this->TrackingNoScript = $TrackingNoScript;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingScript()
    {
        return $this->TrackingScript;
    }

    /**
     * @param string $TrackingScript
     * @return \PMG\BingAds\CampaignManagement\UetTag
     */
    public function setTrackingScript($TrackingScript)
    {
        $this->TrackingScript = $TrackingScript;
        return $this;
    }

    /**
     * @return UetTagTrackingStatus
     */
    public function getTrackingStatus()
    {
        return $this->TrackingStatus;
    }

    /**
     * @param UetTagTrackingStatus $TrackingStatus
     * @return \PMG\BingAds\CampaignManagement\UetTag
     */
    public function setTrackingStatus($TrackingStatus)
    {
        $this->TrackingStatus = $TrackingStatus;
        return $this;
    }

}
