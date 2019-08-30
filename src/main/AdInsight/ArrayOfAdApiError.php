<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfAdApiError implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var AdApiError[] $AdApiError
     */
    protected $AdApiError = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdApiError[]
     */
    public function getAdApiError()
    {
        return $this->AdApiError;
    }

    /**
     * @param AdApiError[] $AdApiError
     * @return \PMG\BingAds\AdInsight\ArrayOfAdApiError
     */
    public function setAdApiError(array $AdApiError = null)
    {
        $this->AdApiError = $AdApiError;
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
      return isset($this->AdApiError[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdApiError
     */
    public function offsetGet($offset)
    {
      return $this->AdApiError[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdApiError $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdApiError[] = $value;
      } else {
        $this->AdApiError[$offset] = $value;
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
      unset($this->AdApiError[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return AdApiError[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdApiError);
    }

    /**
     * Countable implementation
     *
     * @return AdApiError Return count of elements
     */
    public function count()
    {
      return count($this->AdApiError);
    }

    /**
     * Change the current array with another
     *
     * @return AdApiError[]|null The previous array if present
     */
    public function exchangeArray(array $AdApiError)
    {
        $prev = $this->AdApiError;
        $this->AdApiError = $AdApiError;
        return $prev;
    }

}
