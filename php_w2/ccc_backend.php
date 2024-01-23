<?php
$servername = "host";
$username = "root";
$password = "";
$database = "ccc_practice";
$conn = mysqli_connect("localhost", "root", "", "ccc_practice");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$productName = $_REQUEST['productName'];
$sku = $_REQUEST['sku'];
$productType = $_REQUEST['productType'];
$category = $_REQUEST['category'];
$manufacturerCost = $_REQUEST['manufacturerCost'];
$shippingCost = $_REQUEST['shippingCost'];
$price = $_REQUEST['price'];
$status = $_REQUEST['status'];
$createdAt = $_REQUEST['createdAt'];
$updatedAt = $_REQUEST['updatedAt'];
$sql = "INSERT INTO ccc_product VALUES ('$productName','$sku','$productType','$category','$manufacturerCost','$shippingCost','$price','$status','$createdAt','$updatedAt')";

if (mysqli_query($conn, $sql)) {
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>