<?php
echo "<h2> Data Types </h2>";

$integerVar = 42; 
$floatVar = 3.14;
$stringVar = "Hello, PHP!";
$boolVar = true;
$arrayVar = array(1, 2, 3, "PHP");
$nullVar = null;

// Data type check using var_dump() function
echo var_dump($integerVar);
echo("<br>");
echo var_dump($floatVar);
echo("<br>");
echo var_dump($stringVar);
echo("<br>");
echo var_dump($boolVar);
echo("<br>");
echo var_dump($arrayVar);
echo("<br>");
echo var_dump($nullVar);

?>