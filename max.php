<?php

// function maxdata($arr){
//     $temp = $arr[0];
//     foreach($arr as $v){
//         if($temp < $v){
//             $temp = $v;  
//         }
//     }
//     return $temp;
// }

// $array = [-5,-2,-8,-6];

// echo "Max number: ".maxdata($array);



for($i=1 ; $i <= 10; $i++){
    for($j=1 ; $j <= 10; $j++){
        echo $i*$j;
    }
    echo "<br>";
}

?>