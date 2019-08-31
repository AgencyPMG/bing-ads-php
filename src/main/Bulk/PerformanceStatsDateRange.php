<?php

namespace PMG\BingAds\Bulk;

class PerformanceStatsDateRange
{

    /**
     * @var Date $CustomDateRangeEnd
     */
    protected $CustomDateRangeEnd = null;

    /**
     * @var Date $CustomDateRangeStart
     */
    protected $CustomDateRangeStart = null;

    /**
     * @var ReportTimePeriod $PredefinedTime
     */
    protected $PredefinedTime = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Date
     */
    public function getCustomDateRangeEnd()
    {
        return $this->CustomDateRangeEnd;
    }

    /**
     * @param Date $CustomDateRangeEnd
     * @return \PMG\BingAds\Bulk\PerformanceStatsDateRange
     */
    public function setCustomDateRangeEnd($CustomDateRangeEnd)
    {
        $this->CustomDateRangeEnd = $CustomDateRangeEnd;
        return $this;
    }

    /**
     * @return Date
     */
    public function getCustomDateRangeStart()
    {
        return $this->CustomDateRangeStart;
    }

    /**
     * @param Date $CustomDateRangeStart
     * @return \PMG\BingAds\Bulk\PerformanceStatsDateRange
     */
    public function setCustomDateRangeStart($CustomDateRangeStart)
    {
        $this->CustomDateRangeStart = $CustomDateRangeStart;
        return $this;
    }

    /**
     * @return ReportTimePeriod
     */
    public function getPredefinedTime()
    {
        return $this->PredefinedTime;
    }

    /**
     * @param ReportTimePeriod $PredefinedTime
     * @return \PMG\BingAds\Bulk\PerformanceStatsDateRange
     */
    public function setPredefinedTime($PredefinedTime)
    {
        $this->PredefinedTime = $PredefinedTime;
        return $this;
    }

}
