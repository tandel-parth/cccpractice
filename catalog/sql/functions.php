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
        echo "<h2 style='color: green;'>Data stored in the database successfully.</h2>";
    } else {
        echo "<h2 style='color: red;'>ERROR: Unable to insert data into the database.</h2>";
    }

    // Close statement
    $stmt->close();
}

function update($table_name, $data = [], $where = [])
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

    echo "<h3> UPDATE {$table_name} SET {$columns} WHERE {$whereCond} </h3>";
}
// update("ccc_product", ['productName' => 'Table', 'productType' => 'Bundle'], ['proctuctname' => '55', 'productType' => 'Simple']);

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
        echo "<h2 style='color: green;'>Data Deleted from the database successfully.</h2>";
    } else {
        echo "<h2 style='color: red;'>ERROR: Unable to insert data into the database.</h2>";
    }

    // Close statement
    $stmt->close();
}

function select($table_name, $data)
{
    $columns = [];
    foreach ($data as $field => $vale) {
        $columns[] = "$field";
        $values[] = "'$vale'";
    }
    $columns = implode(",", $columns);
    // echo $columns;
    echo "SELECT * FROM $table_name ORDER BY id DESC LIMIT 10";
}
// select("ccc_product",$_POST["group1"]);
// die();