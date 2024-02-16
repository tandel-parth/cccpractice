<?php
class Product_Model_Resource_Product
{
    protected $_tableName = "";
    protected $_primaryKey = "";
    public function init($tableName,$primaryKey)
    {
        $this->_tableName = $tableName;
        $this->_primaryKey = $primaryKey;
    }

    //Above part is abstract
    public function __construct()
    {
        $this->init('ccc_product','product_id');
    }

    public function load($id, $column = null)
    {
        $sql = "SELECT * FROM {$this->_tableName} WHERE {$this->_primaryKey} = $id LIMIT 1";
        return $this->getAdapter()->fetchRow($sql);
    }
    public function getAdapter(){
        return new Core_Model_DB_Adapter();
    }
    public function getPrimaryKey(){
        return $this->_primaryKey;
    }
}
