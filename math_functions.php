<?php
$num_1 = 1078.8789;
$num_2 = -1078.8789;
echo "<h2> Math functions </h2>";


// Basic Arithmetic functions
echo "<h3>1. Basic Arithmetic Functions === >></h3>";

// abs() Function
echo "<b>abs() Function:</b> <br>";
echo (abs($num_1) . "<br>" . abs($num_2)); // The abs() function returns the absolute (positive) value of a number.

echo"<br><br>";

// ceil() Function
echo "<b>ceil() Function: </b><br>";
echo (ceil($num_1) . "<br>" . ceil($num_2)); // The ceil function returns the Round numbers up to the nearest integer.

echo"<br><br>";

// floor() Function
echo "<b>floor() Function: </b><br>";
echo (floor($num_1) . "<br>" . floor($num_2)); // The floor function returns the Round numbers down to the nearest integer.

echo"<br><br>";

// round() Function
echo "<b>round() Function: </b><br>";
echo (round($num_1) . "<br>" . round($num_2). "<br> ==> With Precision <br>" . round($num_1,2) . "<br>" . round($num_2,2) . "<br> ==> With Precision and mode <br>"); // The round function returns the Round numbers.
echo(round(1078.5,0,PHP_ROUND_HALF_UP) . "<br>". round(-1078.5,0,PHP_ROUND_HALF_UP));


// Power Functions
echo "<h3>2. Power Functions === >></h3>";

// pow() function
echo "<b>pow() Function:</b> <br>";
echo ("2^6 : " . pow(2,6) . "<br>-2^6 : " . pow(-2,6) . "<br>-2^-6 : " . pow(-2,-6) . "<br>-2^6.2 : " . pow(-2,6.2));

echo"<br><br>";

// sqrt() function
echo "<b>sqrt() Function:</b> <br>";
echo ("Positive number(1078.8789) square root : " . sqrt($num_1) . "<br>Negative number(-1078.8789) square root : " . sqrt($num_2));


// Random Number Generation
echo "<h3>3. Random Number Generation === >></h3>";

// rand() function
echo "<b>rand() Function:</b> <br>";
echo ("Random number between 200 to 1000 : " . rand(200 , 1000));


// Number Formatting
echo "<h3>4. Number Formatting === >></h3>";

// number_format() function
echo "<b>number_format() Function:</b> <br>";
echo (number_format("12002080601078") . "<br>" . number_format("12002080601078",2));