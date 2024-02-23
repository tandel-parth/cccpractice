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
    public $config = [
        "host" => "localhost",
        "user" => "root",
        "password" => "",
        "database" => "ccc_practice",
    ];
    public $connect = null;
    public function connect()
    {
        if (is_null($this->connect)) {
            $this->connect = mysqli_connect(
                $this->config["host"],
                $this->config["user"],
                $this->config["password"],
                $this->config["database"]
            );
        }
        return $this->connect;
    }

    public function save(Catalog_Model_Product $product)
    {
        $data = $product->getData();

        $sql = "SELECT product_id FROM ccc_product";
        $result = $this->connect()->query($sql);
        $row = $result->fetch_all();
        // print_r($row);
        function collect_nested_array_values($row, &$result = [])
        {
            foreach ($row as $element) {
                if (is_array($element)) {
                    collect_nested_array_values($element, $result);
                } else {
                    $result[] = $element;
                }
            }
            return $result;
        }
        $result_array = collect_nested_array_values($row);
        // print_r($result_array);
        foreach ($result_array as $value) {
            if ($value == $data[$this->getPrimaryKey()]) {
                $sql = $this->updateSql($this->getTableName(), $data, ['product_id' => $data[$this->getPrimaryKey()]]);
                echo $sql;
                $this->getAdapter()->update($sql);
                // $sql = $this->deleteSql($this->getTableName(), ['product_id' => $data[$this->getPrimaryKey()]]);
                // echo $sql;
                // $this->getAdapter()->delete($sql);
            } else {

                $sql = $this->insertSql($this->getTableName(), $data);
                $this->getAdapter()->insert($sql);
            }
        }

        // if (isset($data[$this->getPrimaryKey()])) {
        //     // unset($data[$this->getPrimaryKey()]);
        // } else {

        //     $sql = $this->insertSql($this->getTableName(), $data);
        //     $id = $this->getAdapter()->insert($sql);
        //     // $product->setId($id);
        // }
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
    public function updateSql($table_name, $data = [], $where = [])
    {
        $columns = $whereCond = [];
        foreach ($data as $field => $vale) {
            $columns[] = " `$field` = '$vale'";
        }

        foreach ($where as $field => $vale) {
            $whereCond[] = " `$field` = '$vale'";
        }
        $columns = implode(",", $columns);
        $whereCond = implode(" AND ", $whereCond);

        $query = "UPDATE {$table_name} SET {$columns} WHERE {$whereCond}";
        return $query;
    }
    public function deleteSql($table_name, $where = [])
    {
        $whereCond = [];
        foreach ($where as $field => $vale) {
            $whereCond[] = " `$field` = '$vale'";
        }
        $whereCond = implode(" AND ", $whereCond);
        $query = "DELETE FROM {$table_name} WHERE {$whereCond}";
        return $query;
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
