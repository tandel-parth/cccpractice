<?php
echo "( 1 )  Pattern<br><br>";
for ($i = 1; $i < 6; $i++) {
    for ($j = 1; $j < $i; $j++) {
        echo "-";
    }

    for ($k = $i; $k <= 10; $k++) {
        if($k < 12 - $i){
        echo $k;
        }else{
            echo "-";
        }
    }
    echo "<br>";
}
for ($i = 4  ; $i >= 1; $i--) {
    for ($j = 1; $j < $i; $j++) {
        echo "-";
    }

    for ($k = $i; $k <= 10; $k++) {
        if($k < 12 - $i){
        echo $k;
        }else{
            echo "-";
        }
    }
    echo "<br>";
}
echo "<br><br>";

echo "( 2 )  Pattern<br><br>";
for ($i = 1; $i < 7; $i++) {
    for ($j = 1; $j < $i; $j++) {
        echo "-";
    }

    for ($k = $i; $k <= 11; $k++) {
        if($k < 13 - $i){
        echo $k;
        }else{
            echo "-";
        }
    }
    echo "<br>";
}
for ($i = 5  ; $i >= 1; $i--) {
    for ($j = 1; $j < $i; $j++) {
        echo "-";
    }

    for ($k = $i; $k <= 11; $k++) {
        if($k < 13 - $i){
        echo $k;
        }else{
            echo "-";
        }
    }
    echo "<br>";
}
?>


