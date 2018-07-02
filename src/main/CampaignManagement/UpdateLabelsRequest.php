<?php

namespace PMG\BingAds\CampaignManagement;

class UpdateLabelsRequest
{

    /**
     * @var ArrayOfLabel $Labels
     */
    protected $Labels = null;

    /**
     * @param ArrayOfLabel $Labels
     */
    public function __construct($Labels = null)
    {
      $this->Labels = $Labels;
    }

    /**
     * @return ArrayOfLabel
     */
    public function getLabels()
    {
      return $this->Labels;
    }

    /**
     * @param ArrayOfLabel $Labels
     * @return \PMG\BingAds\CampaignManagement\UpdateLabelsRequest
     */
    public function setLabels($Labels)
    {
      $this->Labels = $Labels;
      return $this;
    }

}
