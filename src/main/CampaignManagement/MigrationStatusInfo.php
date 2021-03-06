<?php

namespace PMG\BingAds\CampaignManagement;

class MigrationStatusInfo
{

    /**
     * @var string $MigrationType
     */
    protected $MigrationType = null;

    /**
     * @var \DateTime $StartTimeInUtc
     */
    protected $StartTimeInUtc = null;

    /**
     * @var MigrationStatus $Status
     */
    protected $Status = null;

    /**
     * @param MigrationStatus $Status
     */
    public function __construct($Status = null)
    {
    $this->Status = $Status;
    }

    /**
     * @return string
     */
    public function getMigrationType()
    {
        return $this->MigrationType;
    }

    /**
     * @param string $MigrationType
     * @return \PMG\BingAds\CampaignManagement\MigrationStatusInfo
     */
    public function setMigrationType($MigrationType)
    {
        $this->MigrationType = $MigrationType;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTimeInUtc()
    {
        if (null === $this->StartTimeInUtc) {
            return $this->StartTimeInUtc;
        }
        try {
            return new \DateTime($this->StartTimeInUtc);
        } catch(\Exception $e) {
            return null;
        }
    }

    /**
     * @param \DateTime $StartTimeInUtc
     * @return \PMG\BingAds\CampaignManagement\MigrationStatusInfo
     */
    public function setStartTimeInUtc(\DateTime $StartTimeInUtc = null)
    {
        $this->StartTimeInUtc = null === $StartTimeInUtc ? null : $StartTimeInUtc->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return MigrationStatus
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param MigrationStatus $Status
     * @return \PMG\BingAds\CampaignManagement\MigrationStatusInfo
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

}
