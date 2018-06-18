<?php

namespace PMG\BingAds\CampaignMangagement;

class ArrayOfMediaAssociation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MediaAssociation[] $MediaAssociation
     */
    protected $MediaAssociation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MediaAssociation[]
     */
    public function getMediaAssociation()
    {
      return $this->MediaAssociation;
    }

    /**
     * @param MediaAssociation[] $MediaAssociation
     * @return \PMG\BingAds\CampaignMangagement\ArrayOfMediaAssociation
     */
    public function setMediaAssociation(array $MediaAssociation = null)
    {
      $this->MediaAssociation = $MediaAssociation;
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
      return isset($this->MediaAssociation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MediaAssociation
     */
    public function offsetGet($offset)
    {
      return $this->MediaAssociation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MediaAssociation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->MediaAssociation[] = $value;
      } else {
        $this->MediaAssociation[$offset] = $value;
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
      unset($this->MediaAssociation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MediaAssociation Return the current element
     */
    public function current()
    {
      return current($this->MediaAssociation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MediaAssociation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MediaAssociation);
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
      reset($this->MediaAssociation);
    }

    /**
     * Countable implementation
     *
     * @return MediaAssociation Return count of elements
     */
    public function count()
    {
      return count($this->MediaAssociation);
    }

}