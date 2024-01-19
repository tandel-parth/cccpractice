<?php

echo "<h2> Type Casting </h2>";

$integerVar = 42; 
$floatVar = 3.14;
$stringVar = "Hello, PHP!";
$boolVar = true;
$arrayVar = array(1, 2, 3, "PHP");
$nullVar = null;

// To cast to integer, use the (integer) statement:
echo "<b>Integer Casting</b> <br>";
//integer to integer
$integerVarCast = (int)$integerVar;
echo var_dump($integerVarCast);
echo("<br>");

// Float to integer
$floatVarCast = (int)$floatVar;
echo var_dump($floatVarCast);
echo("<br>");

// String to integer
$stringVarCast = (int)$stringVar;
echo var_dump($stringVarCast);
echo("<br>");

// Boolean to integer
$boolVarCast = (int)$boolVar;
echo var_dump($boolVarCast);
echo("<br>");

// Array to integer
foreach ($arrayVar as $val){
    $arrayVarCast = (int)$val;
    echo (var_dump($arrayVarCast) . "  ");
}
echo("<br>");

// Null to integer
$nullVarCast = (int)$nullVar;
echo var_dump($nullVarCast);
echo("<br><br>");

// To cast to Float, use the (float) statement:
echo "<b>Float Casting</b> <br>";
//integer to Float
$integerVarCast = (float)$integerVar;
echo var_dump($integerVarCast);
echo("<br>");

// Float to Float
$floatVarCast = (float)$floatVar;
echo var_dump($floatVarCast);
echo("<br>");

// String to Float
$stringVarCast = (float)$stringVar;
echo var_dump($stringVarCast);
echo("<br>");

// Boolean to Float
$boolVarCast = (float)$boolVar;
echo var_dump($boolVarCast);
echo("<br>");

// Array to Float
foreach ($arrayVar as $val){
    $arrayVarCast = (float)$val;
    echo (var_dump($arrayVarCast) . "  ");
}
echo("<br>");

// Null to Float
$nullVarCast = (float)$nullVar;
echo var_dump($nullVarCast);
echo("<br><br>");

// To cast to String, use the (string) statement:
echo "<b>String Casting</b> <br>";
//integer to String
$integerVarCast = (string)$integerVar;
echo var_dump($integerVarCast);
echo("<br>");

// Float to String
$floatVarCast = (string)$floatVar;
echo var_dump($floatVarCast);
echo("<br>");

// String to String
$stringVarCast = (string)$stringVar;
echo var_dump($stringVarCast);
echo("<br>");

// Boolean to String
$boolVarCast = (string)$boolVar;
echo var_dump($boolVarCast);
echo("<br>");

// Array to String
foreach ($arrayVar as $val){
    $arrayVarCast = (string)$val;
    echo (var_dump($arrayVarCast) . "  ");
}
echo("<br>");

// Null to String
$nullVarCast = (string)$nullVar;
echo var_dump($nullVarCast);
echo("<br><br>");

// To cast to Boolean, use the (bool) statement:
echo "<b>Boolean Casting</b> <br>";
//integer to Boolean
$integerVarCast = (bool)$integerVar;
echo var_dump($integerVarCast);
echo("<br>");

// Float to Boolean
$floatVarCast = (bool)$floatVar;
echo var_dump($floatVarCast);
echo("<br>");

// String to Boolean
$stringVarCast = (bool)$stringVar;
echo var_dump($stringVarCast);
echo("<br>");

// Boolean to Boolean
$boolVarCast = (bool)$boolVar;
echo var_dump($boolVarCast);
echo("<br>");

// Array to Boolean
foreach ($arrayVar as $val){
    $arrayVarCast = (bool)$val;
    echo (var_dump($arrayVarCast) . "  ");
}
echo("<br>");

// Null to Boolean
$nullVarCast = (bool)$nullVar;
echo var_dump($nullVarCast);
echo("<br><br>");

// To cast to Array, use the (array) statement:
echo "<b>Array Casting</b> <br>";
//integer to Array
$integerVarCast = (array)$integerVar;
echo var_dump($integerVarCast);
echo("<br>");

// Float to Array
$floatVarCast = (array)$floatVar;
echo var_dump($floatVarCast);
echo("<br>");

// String to Array
$stringVarCast = (array)$stringVar;
echo var_dump($stringVarCast);
echo("<br>");

// Boolean to Array
$boolVarCast = (array)$boolVar;
echo var_dump($boolVarCast);
echo("<br>");

// Array to Array
$arrayVarCast = (array)$arrayVar;
echo (var_dump($arrayVarCast));
echo("<br>");

// Null to Array
$nullVarCast = (array)$nullVar;
echo var_dump($nullVarCast);
echo("<br><br>");

// // To cast to NULL, use the () statement:
// echo "<b>NULL Casting</b> <br>";
// //integer to NULL
// $integerVarCast = ()$integerVar;
// echo var_dump($integerVarCast);
// echo("<br>");

// // Float to NULL
// $floatVarCast = ()$floatVar;
// echo var_dump($floatVarCast);
// echo("<br>");

// // String to NULL
// $stringVarCast = ()$stringVar;
// echo var_dump($stringVarCast);
// echo("<br>");

// // Boolean to NULL
// $boolVarCast = ()$boolVar;
// echo var_dump($boolVarCast);
// echo("<br>");

// // Array to NULL
// $arrayVarCast = ()$arrayVar;
// echo (var_dump($arrayVarCast));
// echo("<br>");

// // Null to NULL
// $nullVarCast = ()$nullVar;
// echo var_dump($nullVarCast);