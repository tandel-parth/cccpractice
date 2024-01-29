<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Information</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .input-box input {
            height: 45px;
            width: 100%;
            outline: none;
            font-size: 16px;
            border-radius: 5px;
            padding-left: 15px;
            padding-right: 15px;
            border: 1px solid #ccc;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }
    </style>
</head>

<body>
    <div class="box">
        <div class="container">
            <?php
            require 'sql/functions.php';

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["group1"])) {
                $conn = new mysqli("localhost", "root", "", "ccc_practice");

                // Check connection
                if ($conn->connect_error) {
                    die("<h3 style='color: red;'>ERROR: Could not connect. " . $conn->connect_error . "</h3>");
                }

                $ins_result = insert($conn, "ccc_category", $_POST["group1"]);
                if ($ins_result === "success") {
                    echo "<script>alert('Data INSERT Successfully')</script>
                    <script>location. href='category.php'</script>";
                } else {
                    echo "<h2 style='color: red;'>ERROR: Unable to INSERT data into the database.</h2>";
                }

                // Close connection
                $conn->close();
            }
            ?>
            <div class="title">Category Information</div><br>
            <div class="content">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="input-box">
                        <span class="details" for="category_name">Category Name</span>
                        <input type="text" placeholder="Enter category Name" id="category_name" name="group1[name]" required>
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