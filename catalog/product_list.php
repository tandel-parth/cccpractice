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
            max-width: 900px;
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

        .column {
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
        .del {
                margin: 5px;
                width: 80px;
                border-radius: 5px;
                border: none;
                color: white;
                background-color: red;
                font-size: 18px;
                font-weight: 500;
                letter-spacing: 1px;
                cursor: pointer;
                transition: all 0.3s ease;
            }

            .del:hover {
                transform: scale(0.99);
                background-color: #32cd32;
            }

            .upd {
                margin: 5px;
                width: 90px;
                border-radius: 5px;
                border: none;
                color: white;
                background-color: #1e90ff;
                font-size: 18px;
                font-weight: 500;
                letter-spacing: 1px;
                cursor: pointer;
                transition: all 0.3s ease;
            }

            .upd:hover {
                transform: scale(0.99);
                background-color: #00bfff;
            }
            .btn{
            border: 1px solid black;
            border-collapse: collapse;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="box">
        <div class="container">
            <div class="title">Product Information</div>
            <?php
            require 'sql/functions.php';
            // include 'php_sql_function.php';
            $conn = mysqli_connect("localhost", "root", "", "ccc_practice");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            // fetch($conn, "ccc_product", );
            $sql = "SELECT * FROM ccc_product ORDER BY product_id DESC LIMIT 20";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $i = 1;
                echo ("<table>
                        <tr>
                            <th width='100vh'>Product ID</th>
                            <th width='200vh'>Product Name</th>
                            <th width='100vh'>SKU</th>
                            <th width='250vh'>Category</th>
                            <th width='100vh'>Edit</th>
                            <th width='100vh'>Delete</th>
                        </tr>");
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td class = 'column'>" . $row["product_id"] . "</td><td class = 'column'>" . $row["productName"] . "</td><td class = 'column'>" . $row["sku"] . "</td><td class = 'column'>" . $row['category'] . "</td>" ?>
                    <td align='center' class = 'btn'> <a href='product.php?product_id=<?php echo $row['product_id'] ?>'><button class='upd'>Edit</button></a> </td>
                    <td align='center' class = 'btn'> <a href='delete.php?product_id=<?php echo $row['product_id'] ?>'><button class='del'>Delete</button></a> </td>
                    </tr><?php
                        }
                echo "</table> <br>";
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </div>
    </div>
</body>

</html>