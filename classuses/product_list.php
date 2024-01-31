<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

        .add {
            display: flex;
            justify-content: space-between;
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

        .add_btn {
            margin: 5px;
            width: 90px;
            border-radius: 5px;
            border: none;
            color: white;
            background-color: #51de3b;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .add_btn:hover {
            transform: scale(0.99);
            background-color: #259b13;
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
            background-color: #fa3c3caf;
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

        .btn {
            border: 1px solid black;
            border-collapse: collapse;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="box">
        <div class="container">
            <div class="add">
                <div class="title">Product Information</div>
                <a href='product.php?action=edit&product_id=""'><button class="add_btn">Add</button></a>
            </div>
            <?php
            require "connection.php";
            require 'execute_fetch.php';
            $ob = new execution();
            $query = $ob->select("ccc_product", "*") . " ORDER BY product_id DESC LIMIT 20";
            $rows = $ob->fetchData($conn, $query);
            if ($rows) {
                echo ("<table>
                        <tr>
                            <th width='100vh'>Product ID</th>
                            <th width='200vh'>Product Name</th>
                            <th width='100vh'>SKU</th>
                            <th width='250vh'>Category</th>
                            <th width='100vh'>Edit</th>
                            <th width='100vh'>Delete</th>
                        </tr>");
                foreach ($rows as $row) {
                    echo "<tr><td class = 'column'>" . $row["product_id"] . "</td>";
                    echo "<td class = 'column'>" . $row["productName"] . "</td><td class = 'column'>" . $row["sku"] . "</td>";
                    echo "<td class = 'column'>" . $row['category'] . "</td>";
                    echo "<td align='center' class='btn'> <a href='product.php?action=edit&product_id=" . $row['product_id'] . "'><button class='upd'>Edit</button></a> </td>";
                    echo "<td align='center' class='btn'> <a href='product.php?action=delete&product_id=" . $row['product_id'] . "'><button class='del'>Delete</button></a> </td></tr>";
                }
                echo "</table> <br>";
            }
            $conn->close();
            ?>
        </div>
    </div>
</body>

</html>