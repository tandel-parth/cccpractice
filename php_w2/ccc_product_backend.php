<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Save</title>
    <style>
        body {
            background: linear-gradient(135deg, #d6b1e5, #94d4ff);
        }

        .box {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        .container {
            max-width: 700px;
            width: 100%;
            background-color: #fff;
            padding: 25px 30px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body>
    <div class="box">
        <div class="container">
            <?php
            include 'php_sql_function.php';

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["group1"])) {
                $conn = new mysqli("localhost", "root", "", "ccc_practice");

                // Check connection
                if ($conn->connect_error) {
                    die("<h3 style='color: red;'>ERROR: Could not connect. " . $conn->connect_error . "</h3>");
                }

                insert($conn, "ccc_product", $_POST["group1"]);

                // Close connection
                $conn->close();
            } else {
                echo "<h3 style='color: red;'>ERROR: Form not submitted or 'group1' not set.</h3>";
            }
            ?>
        </div>
    </div>
</body>

</html>