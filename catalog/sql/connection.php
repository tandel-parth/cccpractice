<?php

            $conn = mysqli_connect("localhost", "root", "", "ccc_practice");

            // Check connection
            if ($conn === false) {
                die("<h3 style='color: red;'>ERROR: Could not connect. "
                    . mysqli_connect_error() . "</h3>");
            }
?>