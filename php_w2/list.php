<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background: linear-gradient(135deg, #d6b1e5, #94d4ff);
        }

        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            margin: 50px;
        }

        .container {
            max-width: 1300px;
            width: 100%;
            background-color: #fff;
            padding: 25px 30px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
        }

        table {
            border-collapse: collapse;
        }

        th {
            font-size: 20px;
            font-weight: 500;
            position: relative;
            border: 1px solid black;
            border-collapse: collapse;
        }

        tr td {
            border: 1px solid black;
            border-collapse: collapse;
            padding-left: 15PX;
            align-items: center;
        }

        .container .title {
            font-size: 25px;
            font-weight: 500;
            position: relative;
            margin-bottom: 15px;
        }

        .container .title::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 252px;
            border-radius: 5px;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }
    </style>
</head>

<body>
    <div class="box">
        <div class="container">
            <div class="title">Product Information</div>
            <?php
            // include 'php_sql_function.php';
            $conn = mysqli_connect("localhost", "root", "", "ccc_practice");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            // fetch($conn, "ccc_product", );
            $sql = "SELECT * FROM ccc_product ORDER BY product_id DESC LIMIT 10";
            $sql1 = "SELECT * FROM ccc_product ORDER BY product_id DESC LIMIT 10";
            $result = $conn->query($sql);
            $result1 = $conn->query($sql1);
            if ($result->num_rows > 0) {
                $i = 1;
                echo ("<table>
                        <tr>
                            <th width='100vh'>Product ID</th>
                            <th width='200vh'>Product Name</th>
                            <th width='100vh'>SKU</th>
                            <th width='100vh'>Product Type </th>
                            <th width='250vh'>Category</th>
                            <th width='100vh'>Manufacturer Cost</th>
                            <th width='100vh'>Shipping Cost</th>
                            <th width='100vh'>Price</th>
                            <th width='100vh'>Status</th>
                            <th width='200vh'>Created At</th>
                            <th width='200vh'>Updated At</th>
                        </tr>");
                // output data of each row
                while ($row = $result->fetch_assoc()) {

                    echo "<tr><td>" . $row["product_id"] . "</td><td>" . $row["productName"] . "</td><td>" . $row["sku"] . "</td><td>" . $row["productType"] . "</td><td>" . $row["category"] . "</td><td>" . $row["manufacturerCost"] . "</td><td>" . $row["shippingCost"] . "</td><td>" . $row["price"] . "</td><td>" . $row["status"] . "</td><td>" . $row["createdAt"] . "</td><td>" . $row["updatedAt"] . "</td></tr>";
                }
                echo "</table> <br>";
            } else {
                echo "0 results";
            }
            if ($result1->num_rows > 0) {
                // echo "<br>";
                $i = 10;
                while ($row1 = $result1->fetch_assoc()) {
                    echo "($i) Data List";
                    $i--;
                    echo ("<ul><li>Product Name:- " . $row1["productName"] . "</li><li>SKU:- " . $row1["sku"] . "</li><li>Product Type:- " . $row1["productType"] . "</li><li>Category:- " . $row1["category"] . "</li><li>Manufacturer Cost:- " . $row1["manufacturerCost"] . "</li><li>Shipping Cost:- " . $row1["shippingCost"] . "</li><li>Price:- " . $row1["price"] . "</li><li>Status:- " . $row1["status"] . "</li><li>Created At:- " . $row1["createdAt"] . "</li><li>Updated At:- " . $row1["updatedAt"] . "</li></ul>");
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </div>
    </div>
</body>

</html>