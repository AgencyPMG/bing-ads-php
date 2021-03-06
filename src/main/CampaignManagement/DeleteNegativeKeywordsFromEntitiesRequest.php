<?php

namespace PMG\BingAds\CampaignManagement;

class DeleteNegativeKeywordsFromEntitiesRequest
{

    /**
     * @var ArrayOfEntityNegativeKeyword $EntityNegativeKeywords
     */
    protected $EntityNegativeKeywords = null;

    /**
     * @param ArrayOfEntityNegativeKeyword $EntityNegativeKeywords
     */
    public function __construct($EntityNegativeKeywords = null)
    {
    $this->EntityNegativeKeywords = $EntityNegativeKeywords;
    }

    /**
     * @return ArrayOfEntityNegativeKeyword
     */
    public function getEntityNegativeKeywords()
    {
        return $this->EntityNegativeKeywords;
    }

    /**
     * @param ArrayOfEntityNegativeKeyword $EntityNegativeKeywords
     * @return \PMG\BingAds\CampaignManagement\DeleteNegativeKeywordsFromEntitiesRequest
     */
    public function setEntityNegativeKeywords($EntityNegativeKeywords)
    {
        $this->EntityNegativeKeywords = $EntityNegativeKeywords;
        return $this;
    }

}
