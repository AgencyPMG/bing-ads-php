<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfLocationCriterion implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var LocationCriterion[] $LocationCriterion
     */
    protected $LocationCriterion = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LocationCriterion[]
     */
    public function getLocationCriterion()
    {
      return $this->LocationCriterion;
    }

    /**
     * @param LocationCriterion[] $LocationCriterion
     * @return \PMG\BingAds\AdInsight\ArrayOfLocationCriterion
     */
    public function setLocationCriterion(array $LocationCriterion = null)
    {
      $this->LocationCriterion = $LocationCriterion;
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
      return isset($this->LocationCriterion[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return LocationCriterion
     */
    public function offsetGet($offset)
    {
      return $this->LocationCriterion[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param LocationCriterion $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->LocationCriterion[] = $value;
      } else {
        $this->LocationCriterion[$offset] = $value;
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
      unset($this->LocationCriterion[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return LocationCriterion Return the current element
     */
    public function current()
    {
      return current($this->LocationCriterion);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->LocationCriterion);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->LocationCriterion);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->LocationCriterion);
    }

    /**
     * Countable implementation
     *
     * @return LocationCriterion Return count of elements
     */
    public function count()
    {
      return count($this->LocationCriterion);
    }

}
