<?php
class Core_Model_Abstract
{
    public function __construct()
    {
        $this->init();
    }
    public function init()
    {
    }
    protected $_data = [];
    protected $_resourceClass = '';
    protected $_collectionClass = '';
    protected $_resource = null;
    protected $_collection = null;

    protected $_status = null;
    public function setResourceClass($resourceClass)
    {
    }
    public function setCollectionClass($collectionClass)
    {
    }
    public function setId($id)
    {
        $this->_data[$this->getResource()->getPrimaryKey()] = $id;
        return $this;
    }
    public function getId()
    {

        return (isset($this->_data[$this->getResource()->getPrimaryKey()]))
         ? $this->_data[$this->getResource()->getPrimaryKey()]
         : 0 ;
    }
 

    public function getResource()
    {
        return new $this->_resourceClass(); 
    }
    public function getCollection()
    {
        $collection = new $this->_collectionClass(); 
        $collection->setResource($this->getResource()); 
        $collection->setModelCLass(get_class($this)); 
        $collection->select();  
        return $collection;

    }

    public function getTableName()
    {
    }
    public function camelCase2UnderScore($str, $separator = "_")
    {
        if (empty($str)) {
            return $str;
        }
        $str = lcfirst($str);
        $str = preg_replace("/[A-Z]/", $separator . "$0", $str);
        return strtolower($str);
    }
    public function __call($method, $args)
    {
        $name = $this->camelCase2UnderScore(substr($method, 3));
        return isset($this->_data[$name]) ? $this->_data[$name] : '';
    }
    public function __set($key, $value)
    {
    }
    public function __get($key)
    {
    }
    public function __unset($key)
    {
    }
    public function getData($key = null)
    {
        return $this->_data;
    }
    public function setData($data)
    {
        $this->_data = $data;
        return $this;
    }
    public function addData($key, $value)
    {
        $this->_data[$key] = $value;
        return $this;
    }
    public function removeData($key = null)
    {
    }

    protected function _beforeSave() {

    }
    protected function _afterSave() {
        
    }
    public function save()
    {
        $this->_beforeSave();
        $this->getResource()->save($this);
        $this->_afterSave();
        return $this;
    }
    public function load($id, $column = null)
    {
        $this->_data = $this->getResource()->load($id, $column);
        return $this;
    }
    public function delete()
    {
        if ($this->getId()) {
            $this->getResource()->delete($this);
        }
        return $this;
    }

}