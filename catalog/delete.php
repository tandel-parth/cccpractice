<?php
require 'sql/connection.php';
    $product_id = $_GET['product_id'];

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    function deleteQuery($table, $product_id) {
        $query = "DELETE FROM $table WHERE product_id=$product_id";
        return $query;
    }

    $sql = deleteQuery("ccc_product", $product_id);

    if ($conn->query($sql) === TRUE) {
        echo ("<script>alert('Product deleted successfully');</script>");
        echo ("<script>window.location.replace('product_list.php')</script>");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
