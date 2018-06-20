<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfAccountInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AccountInfo[] $AccountInfo
     */
    protected $AccountInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountInfo[]
     */
    public function getAccountInfo()
    {
      return $this->AccountInfo;
    }

    /**
     * @param AccountInfo[] $AccountInfo
     * @return \PMG\BingAds\CustomerManagement\ArrayOfAccountInfo
     */
    public function setAccountInfo(array $AccountInfo = null)
    {
      $this->AccountInfo = $AccountInfo;
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
      return isset($this->AccountInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountInfo
     */
    public function offsetGet($offset)
    {
      return $this->AccountInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AccountInfo[] = $value;
      } else {
        $this->AccountInfo[$offset] = $value;
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
      unset($this->AccountInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AccountInfo Return the current element
     */
    public function current()
    {
      return current($this->AccountInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AccountInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AccountInfo);
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
      reset($this->AccountInfo);
    }

    /**
     * Countable implementation
     *
     * @return AccountInfo Return count of elements
     */
    public function count()
    {
      return count($this->AccountInfo);
    }

}
