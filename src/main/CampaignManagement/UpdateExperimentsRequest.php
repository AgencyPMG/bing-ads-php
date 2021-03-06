<?php

namespace PMG\BingAds\CampaignManagement;

class UpdateExperimentsRequest
{

    /**
     * @var ArrayOfExperiment $Experiments
     */
    protected $Experiments = null;

    /**
     * @param ArrayOfExperiment $Experiments
     */
    public function __construct($Experiments = null)
    {
    $this->Experiments = $Experiments;
    }

    /**
     * @return ArrayOfExperiment
     */
    public function getExperiments()
    {
        return $this->Experiments;
    }

    /**
     * @param ArrayOfExperiment $Experiments
     * @return \PMG\BingAds\CampaignManagement\UpdateExperimentsRequest
     */
    public function setExperiments($Experiments)
    {
        $this->Experiments = $Experiments;
        return $this;
    }

}
