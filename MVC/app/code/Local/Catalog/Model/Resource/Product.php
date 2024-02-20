<?php
class Catalog_Model_Resource_Product
{
    protected $_tableName = "";
    protected $_primaryKey = "";
    public function init($tableName, $primaryKey)
    {
        $this->_tableName = $tableName;
        $this->_primaryKey = $primaryKey;
    }
    public function getTableName()
    {
        return $this->_tableName;
    }

    //Above part is abstract
    public function __construct()
    {
        $this->init('ccc_product', 'product_id');
    }

    public function load($id, $column = null)
    {
        $sql = "SELECT * FROM {$this->_tableName} WHERE {$this->_primaryKey} = $id LIMIT 1";
        return $this->getAdapter()->fetchRow($sql);
    }

    public function save(Catalog_Model_Product $product)
    {
        $data = $product->getData();
        if (isset($data[$this->getPrimaryKey()])) {
            unset($data[$this->getPrimaryKey()]);
        }

        $sql = $this->insertSql($this->getTableName(), $data);
        $id = $this->getAdapter()->insert($sql);
        $product->setId($id);
    }

    public function insertSql($tbname, $data)
    {
        $columns = $values = [];
        foreach ($data as $key => $val) {
            $columns[] = "`{$key}`";
            $values[] = "'" . addslashes($val) . "'";
        }
        $columns = implode(" , ", $columns);
        $values = implode(" , ", $values);

        return "INSERT INTO {$tbname} ({$columns}) VALUES ({$values})";
    }
    public function getAdapter()
    {
        return new Core_Model_DB_Adapter();
    }
    public function getPrimaryKey()
    {
        return $this->_primaryKey;
    }
}
