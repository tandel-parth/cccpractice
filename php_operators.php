<?php
$num_1 = 105;
$num_2 = 105;
echo "<h2> PHP Operators </h2>";

// Arithmetic Operators
echo "<h3>1. Arithmetic Operators:  === >></h3>";

// Addition
echo ("Addition of two numbers: " . $num_1+$num_2);

echo"<br>";

// Subtraction
echo ("Subtraction of two numbers: " . $num_1-$num_2);

echo"<br>";

// Multiplication
echo ("Multiplication of two numbers: " . $num_1*$num_2);

echo"<br>";

// Division
echo ("Division of two numbers: " . $num_1/$num_2);

echo"<br>";

// Modulus (Remainder)
echo ("Modulus (Remainder) of two numbers: " . $num_1%$num_2);

echo"<br>";

// Exponentiation
echo ("Exponentiation of two numbers: " . $num_1**$num_2);

// Assignment Operators:
echo "<h3>2. Assignment Operators:  === >></h3>";

//Assignment:
if ($num_1 = $num_2){
    echo "Number-1 and Number-2 are equal.";
}else {
    echo "Number-1 and Number-2 are not equal.";
}

echo"<br>";

$number_1 = 25;
$number_2 = 25;

// Addition Assignment
echo ("Addition of two numbers: " . $number_1 += $number_2);

echo"<br>";

// Subtraction Assignment
echo ("Subtraction of two numbers: " . $number_1 -= $number_2);

echo"<br>";

// Multiplication Assignment
echo ("Multiplication of two numbers: " . $number_1 *= $number_2);

echo"<br>";

// Division Assignment
echo ("Division of two numbers: " . $number_1 /= $number_2);

echo"<br>";

// Modulus Assignment 
echo ("Modulus of two numbers: " . $number_1 %= $number_2);

// Assignment Operators:
echo "<h3>3. Comparison Operator:  === >></h3>";

$number_1 = 25;

//  Equal:
if($number_1 == $number_2){
    echo "Number-1 and Number-2 are equal.";
}else {
    echo "Number-1 and Number-2 are not equal.";
}

echo"<br>";

// Identical
if($number_1 === $number_2){
    echo "Number-1 and Number-2 are Identical.";
}else {
    echo "Number-1 and Number-2 are not Identical.";
}

echo"<br>";

// Not Equal
if($number_1 != $number_2){
    echo "Number-1 and Number-2 are not equal.";
}else {
    echo "Number-1 and Number-2 are equal.";
}

echo"<br>";

// Not Identical
if($number_1 !== $number_2){
    echo "Number-1 and Number-2 are not Identical.";
}else {
    echo "Number-1 and Number-2 are Identical.";
}

echo"<br>";

// Greater Than
if($number_1 > $number_2){
    echo "Number-1 is Greater Than Number-2.";
}else {
    echo "Number-1 is not Greater Than Number-2.";
}

echo"<br>";

// Less Than
if($number_1 < $number_2){
    echo "Number-1 is Less Than Number-2.";
}else {
    echo "Number-1 is not Less Than Number-2.";
}

echo"<br>";

// Greater Than or Equal To
if($number_1 >= $number_2){
    echo "Number-1 is Greater Than or Equal To Number-2.";
}else {
    echo "Number-1 is not Greater Than or Equal To Number-2.";
}

echo"<br>";

// Less Than or Equal To
if($number_1 <= $number_2){
    echo "Number-1 is Less Than or Equal To Number-2.";
}else {
    echo "Number-1 is not Less Than or Equal To Number-2.";
}

// Logical Operators
echo "<h3>4. Logical Operators  === >></h3>";

// Logical AND
if ($number_1 == 25 && $number_2 == 25){
    echo "All the conditions are true";
}else{
    echo "One condition among the given condition is false.";
}

echo "<br>";

// Logical OR
if ($number_1 == 25 || $number_2 == 25){
    echo "One condition among the given condition is true.";
}else{
    echo "All the conditions are false.";
}

echo "<br>";

// Logical NOT
if (!($number_1==25)){
    echo "Number-1 is equal to 25";
}else{
    echo "Number-1 is not equal to 25";
}

// Increment and Decrement Operators:
echo "<h3>5. Increment and Decrement Operators  === >></h3>";

// Increment:
echo ("(++i) Increments Variable by one, then returns Variable : " . ++$number_1 . "<br>");
$number_1++;
echo ("(i++) Returns Variable, then increments Variable by one : " . $number_1 );

echo "<br>";

// Decrement:
echo ("(--i) Decrements Variable by one, then returns Variable : " . --$number_1 . "<br>");
$number_1--;
echo ("(i--) Returns Variable, then Decrements Variable by one : " . $number_1 );


// String Operators:
echo "<h3>6. String Operators === >></h3>";

// Concatenation
$str_1 = "Parth ";
$str_2 = "Tandel";

$str = $str_1.$str_2;
echo ("Concatenation : " . $str);

echo "<br>";

//Concatenation Assignment
$str_1 .= $str_2;
echo ("Concatenation Assignment : " . $str_1);


// Conditional (Ternary) Operator:
echo "<h3>7. Conditional (Ternary) Operator === >></h3>";

$age = 75;
echo ("Are you adult : " . ($age >= 18 ? "Yes" : "No"));

?>