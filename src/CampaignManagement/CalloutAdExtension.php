<?php

namespace PMG\BingAds\CampaignMangagement;

class CalloutAdExtension extends AdExtension
{

    /**
     * @var string $Text
     */
    protected $Text = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \PMG\BingAds\CampaignMangagement\CalloutAdExtension
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
