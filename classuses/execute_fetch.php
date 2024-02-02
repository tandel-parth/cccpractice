<?php
require "connection.php";
require "class_methods.php";
class execution extends querybulder
{
    public function execute($conn, $query)
    {
        if (mysqli_query($conn, $query)) {
            return "success";
        } else {
            echo "<script>alert('Please Enter Diffrent Product Id Beacuse this Id is already in use.')</script>";
        }
    }
    public function fetchData($conn, $query)
    {
        $result = $conn->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $rows = $result->fetch_all(MYSQLI_ASSOC);
                return $rows;
            } else {
                echo "<p>No records found.</p>";
            }
        } else {
            return $conn->error;
        }
        $result->free_result();
    }
}
?>