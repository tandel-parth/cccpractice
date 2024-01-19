<?php
echo "<h2> All Loops </h2>";

//  For Loop:
echo "<h3>1. For Loop:  === >></h3>";

echo "( 1 )  Pattern<br>";
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo"*";
    }
    echo"<br>";
}
echo "( 2 )  Pattern<br>";
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < $i +1; $j++) {
        echo"*";
    }
    echo"<br>";
}
echo "( 3 )  Pattern<br>";
for ($i = 5; $i > 0; $i--) {
    for ($j = 0; $j < $i; $j++) {
        echo"*";
    }
    echo"<br>";
}

//  While Loop:
echo "<h3>2. While Loop:  === >></h3>";

echo "( 1 )  Pattern<br>";
$i = 0;
while ($i <= 5){
    $j = 0;
    while($j <= 5){
        echo"*";
        $j++;
    }
    $i++;
    echo"<br>";
}

echo "( 2 )  Pattern<br>";
$i = 0;
while ($i <= 5){
    $j = 0;
    while($j <= $i){
        echo"*";
        $j++;
    }
    $i++;
    echo"<br>";
}

echo "( 3 )  Pattern<br>";
$i = 5;
while ($i >= 0){
    $j = 0;
    while($j <= $i){
        echo"*";
        $j++;
    }
    $i--;
    echo"<br>";
}

// do While Loop:
echo "<h3>2. Do While Loop:  === >></h3>";

echo "( 1 )  Pattern<br>";
$i = 0;
do{
    $j = 0;
    while($j <= 5){
        echo"*";
        $j++;
    }
    $i++;
    echo"<br>";
}while ($i <= 5);

echo "( 2 )  Pattern<br>";
$i = 0;
do{
    $j = 0;
    while($j <= $i){
        echo"*";
        $j++;
    }
    $i++;
    echo"<br>";
}while ($i <= 5);

echo "( 3 )  Pattern<br>";
$i = 5;
do{
    $j = 0;
    while($j <= $i){
        echo"*";
        $j++;
    }
    $i--;
    echo"<br>";
}while ($i >= 0);

// Foreach Loop:
echo "<h3>3. Foreach Loop:  === >></h3>";  

$arr = array("Parth" , "Ishika" , "Vinit" , "Sagar" , "Rajveer");
echo "Array data:- ";
foreach($arr as $val){
    echo ("'" . $val . "' ");
}

echo"<br> <br>";

$arr = array("*" , "**" , "***" , "****" , "*****");
foreach($arr as $val){
    echo ($val . "<br>");
}