<?php
require 'sql/connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $data=$_POST["group1"];
  $product_id = $_POST['group1']['product_id'];  
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    function updateQuery($table, $data ,$product_id) {
        $set = "";
        foreach ($data as $key => $value) {
            $set .= "$key = '$value', ";
        }
        $set = rtrim($set, ", ");
        $query = "UPDATE $table SET $set WHERE product_id=$product_id";
        return $query;
    }
    $sql =updateQuery("ccc_product",$data,$product_id);
 

    if ($conn->query($sql) === TRUE) {
        echo ("<script>alert('Product updated successfully');</script>");
        echo ("<script>window.location.replace('product_list.php')</script>");
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request";
}
?>