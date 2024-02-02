<?php
include "Connection.php";
class Lib_Sql_Query_Builder extends Lib_Connection
{
    public function __construct()
    {
        // echo get_class($this);
    }

    public function insert($tableName, $data)
    {
        $columns = $values = [];
        foreach ($data as $key => $value) {
            $columns[] = sprintf("`%s`", $key);
            $values[]  = sprintf("'%s'", addslashes($value));
        }
        $columns = implode(",", $columns);
        $values = implode(",", $values);
        return "INSERT INTO {$tableName} ({$columns}) VALUES ({$values});";
    }

    public function update($table_name, $data = [], $where = [])
    {
        $columns = $whereCond = [];
        foreach ($data as $field => $vale) {
            $columns[] = sprintf(" `%s` = '%s'", $field ,addslashes($vale));
        }
    
        foreach ($where as $field => $vale) {
            $whereCond[] = sprintf(" `%s` = '%s'", $field ,addslashes($vale));
        }
        $columns = implode(",", $columns);
        $whereCond = implode(" AND ", $whereCond);
    
        $query = "UPDATE {$table_name} SET {$columns} WHERE {$whereCond}";
        return $query;
    }

    public function delete($table_name, $where = [])
    {
        $whereCond = [];
        foreach ($where as $field => $vale) {
            $whereCond[] = sprintf(" `%s` = '%s'", $field ,addslashes($vale));
        }
        $whereCond = implode(" AND ", $whereCond);
        $query = "DELETE FROM {$table_name} WHERE {$whereCond}";
        return $query;
    }

    public function select($table_name, $data , $where = [])
    {
        if($data == "*"){
            $columns = "*";
        }else{ 
            $columns = [];
            foreach ($data as $field) {
                $columns[] = sprintf("`%s`", $field);
            }
            $columns = implode(" , ", $columns);
        }
        $whereCond = [];
        foreach ($where as $field => $vale) {
            $whereCond[] = sprintf(" `%s` = '%s'", $field ,addslashes($vale));
        }
        $whereCond = implode(" AND ", $whereCond);
        $query =  "SELECT $columns FROM $table_name";
        if (!empty($whereCond)) {
            $query = $query . " WHERE " . $whereCond;
        }
        return $query;
    }
}
$obj = new Lib_Sql_Query_Builder();
echo $obj->update("ccc_product",['productName' => 'Table', 'productType' => 'Bundle'] , ['product_id' => 25]);