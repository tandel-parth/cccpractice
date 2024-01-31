<?php
require 'connection.php';
class querybulder{
    public function insert($table_name, $data)
    {
        $columns = $value = [];
        foreach ($data as $col => $val) {
            $columns[] = "`$col`";
            $value[] = "'$val'";
        }
        $columns = implode(", ", $columns);
        $value = implode(", ", $value);
        $query = "INSERT INTO $table_name ($columns) VALUES($value);";
        return $query;
    }

    public function update($table_name, $data = [], $where = [])
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

    public function delete($table_name, $where = [])
    {
        $whereCond = [];
        foreach ($where as $field => $vale) {
            $whereCond[] = " `$field` = '$vale'";
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
                $columns[] = "$field";
            }
            $columns = implode(" , ", $columns);
        }
        $whereCond = [];
        foreach ($where as $field => $vale) {
            $whereCond[] = " `$field` = '$vale'";
        }
        $whereCond = implode(" AND ", $whereCond);
        $query =  "SELECT $columns FROM $table_name";
        if (!empty($whereCond)) {
            $query = $query . " WHERE " . $whereCond;
        }
        return $query;
    }
}
?>