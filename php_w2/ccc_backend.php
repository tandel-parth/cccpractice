<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Save</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="box">
        <div class="container">
            <?php
            $conn = mysqli_connect("localhost", "root", "", "ccc_practice");

            // Check connection
            if ($conn === false) {
                die("<h3 style='color: red;'>ERROR: Could not connect. "
                    . mysqli_connect_error() . "</h3>");
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
                echo "<h3 style='color: green;'>data stored in a database successfully."
                    . " Please browse your localhost php my admin"
                    . " to view the updated data</h3>";
            } else {
                echo "<h3 style='color: red;'>ERROR: Hush! Sorry $sql. "
                    . mysqli_error($conn). "</h3>";
            }

            // Close connection
            mysqli_close($conn);
            ?>
        </div>
    </div>
</body>

</html>