<?php

namespace PMG\BingAds\Reporting;

class ArrayOfGoalsAndFunnelsReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var GoalsAndFunnelsReportColumn[] $GoalsAndFunnelsReportColumn
     */
    protected $GoalsAndFunnelsReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GoalsAndFunnelsReportColumn[]
     */
    public function getGoalsAndFunnelsReportColumn()
    {
        return $this->GoalsAndFunnelsReportColumn;
    }

    /**
     * @param GoalsAndFunnelsReportColumn[] $GoalsAndFunnelsReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfGoalsAndFunnelsReportColumn
     */
    public function setGoalsAndFunnelsReportColumn(array $GoalsAndFunnelsReportColumn = null)
    {
        $this->GoalsAndFunnelsReportColumn = $GoalsAndFunnelsReportColumn;
        return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->GoalsAndFunnelsReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return GoalsAndFunnelsReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->GoalsAndFunnelsReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param GoalsAndFunnelsReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->GoalsAndFunnelsReportColumn[] = $value;
      } else {
        $this->GoalsAndFunnelsReportColumn[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->GoalsAndFunnelsReportColumn[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return GoalsAndFunnelsReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->GoalsAndFunnelsReportColumn ?? []);
    }

    /**
     * Countable implementation
     *
     * @return GoalsAndFunnelsReportColumn Return count of elements
     */
    public function count()
    {
        return is_array($this->GoalsAndFunnelsReportColumn) ? count($this->GoalsAndFunnelsReportColumn) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return GoalsAndFunnelsReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $GoalsAndFunnelsReportColumn)
    {
        $prev = $this->GoalsAndFunnelsReportColumn;
        $this->GoalsAndFunnelsReportColumn = $GoalsAndFunnelsReportColumn;
        return $prev;
    }

}
