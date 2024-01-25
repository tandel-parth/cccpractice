<?php

function insert($conn, $table_name, $data)
{
    $columns = $VALUES = [];
    foreach ($data as $col => $val) {
        $columns[] = "`$col`";
        $VALUES[] = "'$val'";
    }
    $columns = implode(", ", $columns);
    $value = implode(", ", $VALUES);
    //echo "<h3> INSERT INTO $table_name ($columns) VALUES ($value) </h3>";
    $stmt = $conn->prepare("INSERT INTO $table_name ($columns) VALUES ($value)");
    $stmt->execute();

    // Check for success
    if ($stmt->affected_rows > 0) {
        echo "<h2 style='color: green;'>Data stored in the database successfully.</h2>";
    } else {
        echo "<h2 style='color: red;'>ERROR: Unable to insert data into the database.</h2>";
    }

    // Close statement
    $stmt->close();
}

function update($table_name, $data = [], $where = [])
{
    $columns = $whereCond = [];
    foreach ($data as $field => $vale) {
        $columns[] = " `$field` = '$vale'";
    }

    foreach ($where as $field => $vale) {
        $whereCond[] = " `$field` = '$vale'";
    }
    $columns = implode(",", $columns);
    $whereCond = implode(" AND ", $whereCond);

    echo "<h3> UPDATE {$table_name} SET {$columns} WHERE {$whereCond} </h3>";
}
// update("ccc_product", ['productName' => 'Table', 'productType' => 'Bundle'], ['proctuctname' => '55', 'productType' => 'Simple']);

function delete($table_name, $where = [])
{
    $whereCond = [];
    foreach ($where as $field => $vale) {
        $whereCond[] = " `$field` = '$vale'";
    }
    $whereCond = implode(" AND ", $whereCond);

    echo "<h3> DELETE FROM {$table_name} WHERE {$whereCond} </h3>";
}
function select($table_name, $data)
{
    $columns = $value = [];
    foreach ($data as $field => $vale) {
        $columns[] = "$field";
        $values[] = "'$vale'";
    }
    $columns = implode(",", $columns);
    $value = implode(", ", $values);

    // echo $columns;
    echo "SELECT * FROM $table_name ORDER BY id DESC LIMIT 10";
}
// select("ccc_product",$_POST["group1"]);
// die();
//delete("ccc_product", ['proctuctname' => '55', 'productType' => 'Simple']);
// die();

// function fetch($conn, $table_name, $data)
// {
//     $columns = [];
//     foreach ($data as $field => $vale) {
//         $columns[] = "field";
//         $values[] = "'$vale'";
//     }
//     $columns = implode(",", $columns);
//     echo $columns;
//     $sql = "SELECT * FROM $table_name ORDER BY id DESC LIMIT 10";
//     $result = $conn->query($sql);
//     if ($result->num_rows > 0) {
//         $i = 1;
//         echo ("<table>
//                 <tr>
//                     <th width='200vh'>Product Name</th>
//                     <th width='100vh'>SKU</th>
//                     <th width='100vh'>Product Type </th>
//                     <th width='250vh'>Category</th>
//                     <th width='100vh'>Manufacturer Cost</th>
//                     <th width='100vh'>Shipping Cost</th>
//                     <th width='100vh'>Price</th>
//                     <th width='100vh'>Status</th>
//                     <th width='200vh'>Created At</th>
//                     <th width='200vh'>Updated At</th>
//                 </tr>");
//         // output data of each row
//         while ($row = $result->fetch_assoc()) {
//             echo "<tr><td>" . $row["$columns"] . "</td></tr>";
//         }
//         echo "</table> <br>";
//     } else {
//         echo "0 results";
//     }
// }
// fetch($conn, "ccc_product", $_POST["group1"]);

// die();