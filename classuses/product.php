<?php


// require "class_methods.php";
require "execute_fetch.php";
// $product_id = $_GET["product_id"];
$action = $_GET["action"];
if (isset($_GET['product_id']) && $action == "delete") {
    $product_id = $_GET["product_id"];
    $obj = new execution();
    $query = $obj->delete("ccc_product", ["product_id" => $product_id ]);
    $del_result = $obj->execute($conn, $query);
    if ($del_result === "success") {
        echo "<script>alert('Data Deleted Successfully')</script>
        <script>location. href='product_list.php'</script>";
    } else {
        echo "<h2 style='color: red;'>ERROR: Unable to INSERT data into the database.</h2>";
    }
}
if (isset($_GET['product_id']) && $action == "edit") {
    $product_id = $_GET["product_id"];
    $sql = "SELECT * FROM ccc_product WHERE product_id='$product_id'";
    $result = $conn->query($sql);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $postData = $_POST['group1'];
        $obj = new execution();
        if ($product_id == $postData['product_id']) {
            $query = $obj->update("ccc_product", $postData, ['product_id' => $product_id]);
            $upd_result = $obj->execute($conn, $query);
            if ($upd_result === "success") {
                echo "<script>alert('Data UPDATE Successfully')</script>
        <script>location. href='product_list.php'</script>";
            } else {
                echo "<h2 style='color: red;'>ERROR: Unable to INSERT data into the database.</h2>";
            }
        } else {
            $query = $obj->insert("ccc_product", $postData);
            $ins_result = $obj->execute($conn, $query);
            echo $ins_result;
            if ($ins_result == "success") {
                echo "<script>alert('Data INSERT Successfully')</script>
        <script>location. href='product_list.php'</script>";
            }
        }
    }

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Product Information Form</title>
        <style>
            .input-box-1 {
                width: 300px;
                max-width: 100%;
            }

            form .input-box-1 span.details {
                display: block;
                font-weight: 500;
                margin-bottom: -10px;
            }
        </style>
    </head>

    <body>
        <?php
        $row = $result->fetch_assoc();
        $product_id = isset($row['product_id']) ? $row['product_id'] : "";
        $product_name = isset($row['productName']) ? $row['productName'] : "";
        $product_type = isset($row['productType']) ? $row['productType'] : "";
        $sku = isset($row['sku']) ? $row['sku'] : "";
        $category = isset($row['category']) ? $row['category'] : "";
        $manufacturer_cost = isset($row['manufacturerCost']) ? $row['manufacturerCost'] : "";
        $shippingCost = isset($row['shippingCost']) ? $row['shippingCost'] : "";
        $price = isset($row['price']) ? $row['price'] : "";
        $status = isset($row['status']) ? $row['status'] : "";
        $createdAt = isset($row['createdAt']) ? $row['createdAt'] : "";
        $updatedAt = isset($row['updatedAt']) ? $row['updatedAt'] : "";
        ?>
        <div class="box">
            <div class="container">
                <div class="title">Product Information</div>
                <div class="content">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>?action=edit&product_id=<?php echo $product_id?>" method="post">
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details" for="product_id">Product ID</span>
                                <input type="text" placeholder="Enter Product ID" id="product_id" name="group1[product_id]" value="<?php echo $product_id ?>">
                            </div>
                            <div class="input-box">
                                <span class="details" for="productName">Product Name</span>
                                <input type="text" placeholder="Enter Product Name" id="productName" name="group1[productName]" value="<?php echo $product_name; ?>" required>
                            </div>
                            <div class="input-box">
                                <span class="details" for="sku">SKU</span>
                                <input type="text" placeholder="Enter SKU" id="sku" name="group1[sku]" value="<?php echo $sku; ?>" required>
                            </div>
                            <div class="input-box-1" style="justify-content:left">
                                <span class="details" for="productType">Product Type</span><br>
                                <?php if ($product_type == "Bundle") : ?>
                                    <input type="radio" id="simpleType" name="group1[productType]" value="Simple">
                                    <span for="simpleType">Simple</span><br>
                                    <input type="radio" id="bundleType" name="group1[productType]" value="Bundle" checked>
                                    <span for="bundleType">Bundle</span>
                                <?php elseif ($product_type == "Simple") : ?>
                                    <input type="radio" id="simpleType" name="group1[productType]" value="Simple" checked>
                                    <span for="simpleType">Simple</span><br>
                                    <input type="radio" id="bundleType" name="group1[productType]" value="Bundle">
                                    <span for="bundleType">Bundle</span>

                                <?php else : ?>
                                    <input type="radio" id="simpleType" name="group1[productType]" value="Simple">
                                    <span for="simpleType">Simple</span><br>
                                    <input type="radio" id="bundleType" name="group1[productType]" value="Bundle">
                                    <span for="bundleType">Bundle</span>
                                <?php endif; ?>

                            </div>
                            <div class="input-box">
                                <span class="details" for="category">Category</span>
                                <select id="category" name="group1[category]" class="input-box" required>
                                    <?php
                                    $categories = ["--Select--", "Bar & Game Room", "Bedroom", "Decor", "Dining & Kitchen", "Lighting", "Living Room", "Mattresses", "Office", "Outdoor"];

                                    foreach ($categories as $cat) {
                                        echo '<option value="' . $cat . '" ' . (($category == $cat) ? 'selected' : '') . '>' . $cat . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="input-box">
                                <span class="details" for="manufacturerCost">Manufacturer Cost</span>
                                <input type="text" placeholder="Enter Manufacturer Cost" id="manufacturerCost" name="group1[manufacturerCost]" value="<?php echo $manufacturer_cost; ?>" required>
                            </div>
                            <div class="input-box">
                                <span class="details" for="shippingCost">Shipping Cost </span>
                                <input type="text" placeholder="Enter Shipping Cost" id="shippingCost" name="group1[shippingCost]" value="<?php echo $shippingCost; ?>" required>
                            </div>
                            <div class="input-box">
                                <span class="details" for="price">Price</span>
                                <input type="text" placeholder="Enter Price" id="price" name="group1[price]" value="<?php echo $price; ?>" required>
                            </div>
                            <div class="input-box">
                                <span class="details" for="status">Status</span>
                                <select id="status" name="group1[status]" class="input-box" required>

                                    <?php
                                    if ($status == "") {
                                    ?>
                                        <option value="">---select---</option>
                                        <option value="Enabled">Enabled</option>
                                        <option value="Disabled">Disabled</option>
                                    <?php
                                    } elseif ($status == "Enabled") {
                                    ?>
                                        <option value="<?php echo $status; ?>" selected><?php echo $status; ?></option>
                                        <option value="Disabled">Disabled</option>
                                    <?php
                                    } else {
                                    ?>
                                        <option value="Enabled">Enabled</option>
                                        <option value="<?php echo $status; ?>" selected><?php echo $status; ?></option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>
                            <div class="input-box">
                                <span class="details" for="createdAt">Created At</span>
                                <input type="date" id="createdAt" name="group1[createdAt]" value="<?php echo $createdAt; ?>" required>
                            </div>
                            <div class="input-box">
                                <span class="details" for="updatedAt">Updated At</span>
                                <input type="date" id="updatedAt" name="group1[updatedAt]" value="<?php echo $updatedAt; ?>" required>
                            </div>
                        </div>
                        <div class="button">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php
    $conn->close();
}
?>