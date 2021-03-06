<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordSuggestion implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var KeywordSuggestion[] $KeywordSuggestion
     */
    protected $KeywordSuggestion = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordSuggestion[]
     */
    public function getKeywordSuggestion()
    {
        return $this->KeywordSuggestion;
    }

    /**
     * @param KeywordSuggestion[] $KeywordSuggestion
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordSuggestion
     */
    public function setKeywordSuggestion(array $KeywordSuggestion = null)
    {
        $this->KeywordSuggestion = $KeywordSuggestion;
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
      return isset($this->KeywordSuggestion[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordSuggestion
     */
    public function offsetGet($offset)
    {
      return $this->KeywordSuggestion[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordSuggestion $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordSuggestion[] = $value;
      } else {
        $this->KeywordSuggestion[$offset] = $value;
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
      unset($this->KeywordSuggestion[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return KeywordSuggestion[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordSuggestion ?? []);
    }

    /**
     * Countable implementation
     *
     * @return KeywordSuggestion Return count of elements
     */
    public function count()
    {
        return is_array($this->KeywordSuggestion) ? count($this->KeywordSuggestion) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return KeywordSuggestion[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordSuggestion)
    {
        $prev = $this->KeywordSuggestion;
        $this->KeywordSuggestion = $KeywordSuggestion;
        return $prev;
    }

}
