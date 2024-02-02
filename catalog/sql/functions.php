<?php

function insert($conn, $table_name, $data)
{
    $columns = $VALUES = [];
    foreach ($data as $col => $val) {
        $columns[] = "`$col`";
        $VALUES[] = "'$val'";
    }
    $columns = implode(", ", $columns);
    $value = implode(", ", $VALUES);
    //echo "<h3> INSERT INTO $table_name ($columns) VALUES ($value) </h3>";
    $stmt = $conn->prepare("INSERT INTO $table_name ($columns) VALUES ($value)");
    $stmt->execute();

    // Check for success
    if ($stmt->affected_rows > 0) {
        return "success";
    } else {
        return "error";
    }

    // Close statement
    $stmt->close();
}

function update($conn,$table_name, $data = [], $where = [])
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

    // echo "<h3> UPDATE {$table_name} SET {$columns} WHERE {$whereCond} </h3>";
    $stmt = $conn->prepare("UPDATE {$table_name} SET {$columns} WHERE {$whereCond}");
    $stmt->execute();

    // Check for success
    if ($stmt->affected_rows > 0) {
        return "success";
    } else {
        return "error";
    }

    // Close statement
    $stmt->close();
}
// update("ccc_product", ['productName' => 'Table', 'productType' => 'Bundle'], ['proctuctname' => '55', 'productType' => 'Simple']);
// die();

function delete($conn ,$table_name, $where = [])
{
    $whereCond = [];
    foreach ($where as $field => $vale) {
        $whereCond[] = " `$field` = '$vale'";
    }
    $whereCond = implode(" AND ", $whereCond);
    // echo "<h3> DELETE FROM {$table_name} WHERE {$whereCond} </h3>";
    $stmt = $conn->prepare("DELETE FROM {$table_name} WHERE {$whereCond}");
    $stmt->execute();

    // Check for success
    if ($stmt->affected_rows > 0) {
        return "success";
    } else {    
        return "error";
    }

    // Close statement
    $stmt->close();
}

// select("ccc_product",$_POST["group1"]);
// die();