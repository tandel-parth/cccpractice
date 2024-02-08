<?php

$arr = array(3,5,7,1,9);
$temparr = $arr;
sort($arr);
array_pop($arr);
echo "Min : "  .array_sum($arr);
echo "<br>";
rsort($temparr);
array_pop($temparr);
echo "Max : "  .array_sum($temparr);




// function sum($n)
// {
//     $sum = 0;
//     $sum = $sum + $n;
//     return sum($sum);
// }

// $arr = [1, 2, 3, 4, 5];
// sort($arr);
// $array = array_map('sum', $arr);
// echo $array;

// Root Folder
//     /app/code/local/
//             /Product/
//                 /Model
//                 /Controller
//                 /View
//             /Customer
//                 /Model
//                 /Controller
//                 /View
//         /design/frontend/tempalte/
//             /product
//                 /form.phtml
//                 /list.phtml
//                 /grid.phtml
//             /customer/
//                 /form.phtml
//                 /list.phtml
//                 /address/
//                     form.phtml

// http://localhost/myolderootirectry
//     product/index/new
//     product/index/list
//     product/index/save
//     product/index/delete

//     customer/index/new
//     customer/index/list
//     customer/index/save
//     customer/index/delete

//     customer/address/new
//     customer/address/list
//     customer/address/save
//     customer/address/delete

//     quoat_/address/new
//     quoat_/address/list
//     quoat_/address/save
//     quoat_/address/delete



// page/ 