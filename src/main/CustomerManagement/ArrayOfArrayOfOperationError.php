<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfArrayOfOperationError implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var ArrayOfOperationError[] $ArrayOfOperationError
     */
    protected $ArrayOfOperationError = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfOperationError[]
     */
    public function getArrayOfOperationError()
    {
        return $this->ArrayOfOperationError;
    }

    /**
     * @param ArrayOfOperationError[] $ArrayOfOperationError
     * @return \PMG\BingAds\CustomerManagement\ArrayOfArrayOfOperationError
     */
    public function setArrayOfOperationError(array $ArrayOfOperationError = null)
    {
        $this->ArrayOfOperationError = $ArrayOfOperationError;
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
      return isset($this->ArrayOfOperationError[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ArrayOfOperationError
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfOperationError[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ArrayOfOperationError $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfOperationError[] = $value;
      } else {
        $this->ArrayOfOperationError[$offset] = $value;
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
      unset($this->ArrayOfOperationError[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return ArrayOfOperationError[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->ArrayOfOperationError);
    }

    /**
     * Countable implementation
     *
     * @return ArrayOfOperationError Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfOperationError);
    }

    /**
     * Change the current array with another
     *
     * @return ArrayOfOperationError[]|null The previous array if present
     */
    public function exchangeArray(array $ArrayOfOperationError)
    {
        $prev = $this->ArrayOfOperationError;
        $this->ArrayOfOperationError = $ArrayOfOperationError;
        return $prev;
    }

}
