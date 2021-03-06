<?php

namespace PMG\BingAds\Reporting;

class AccountPerformanceReportRequest extends ReportRequest
{

    /**
     * @var ReportAggregation $Aggregation
     */
    protected $Aggregation = null;

    /**
     * @var ArrayOfAccountPerformanceReportColumn $Columns
     */
    protected $Columns = null;

    /**
     * @var AccountPerformanceReportFilter $Filter
     */
    protected $Filter = null;

    /**
     * @var AccountReportScope $Scope
     */
    protected $Scope = null;

    /**
     * @var ReportTime $Time
     */
    protected $Time = null;

    /**
     * @param ReportAggregation $Aggregation
     */
    public function __construct($Aggregation = null)
    {
        parent::__construct();
    $this->Aggregation = $Aggregation;
    }

    /**
     * @return ReportAggregation
     */
    public function getAggregation()
    {
        return $this->Aggregation;
    }

    /**
     * @param ReportAggregation $Aggregation
     * @return \PMG\BingAds\Reporting\AccountPerformanceReportRequest
     */
    public function setAggregation($Aggregation)
    {
        $this->Aggregation = $Aggregation;
        return $this;
    }

    /**
     * @return ArrayOfAccountPerformanceReportColumn
     */
    public function getColumns()
    {
        return $this->Columns;
    }

    /**
     * @param ArrayOfAccountPerformanceReportColumn $Columns
     * @return \PMG\BingAds\Reporting\AccountPerformanceReportRequest
     */
    public function setColumns($Columns)
    {
        $this->Columns = $Columns;
        return $this;
    }

    /**
     * @return AccountPerformanceReportFilter
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    /**
     * @param AccountPerformanceReportFilter $Filter
     * @return \PMG\BingAds\Reporting\AccountPerformanceReportRequest
     */
    public function setFilter($Filter)
    {
        $this->Filter = $Filter;
        return $this;
    }

    /**
     * @return AccountReportScope
     */
    public function getScope()
    {
        return $this->Scope;
    }

    /**
     * @param AccountReportScope $Scope
     * @return \PMG\BingAds\Reporting\AccountPerformanceReportRequest
     */
    public function setScope($Scope)
    {
        $this->Scope = $Scope;
        return $this;
    }

    /**
     * @return ReportTime
     */
    public function getTime()
    {
        return $this->Time;
    }

    /**
     * @param ReportTime $Time
     * @return \PMG\BingAds\Reporting\AccountPerformanceReportRequest
     */
    public function setTime($Time)
    {
        $this->Time = $Time;
        return $this;
    }

}
