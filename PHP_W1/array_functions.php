<?php
echo "<h2> Array Functions </h2>";

// Array Creation and Initialization:
echo "<h3> 1. Array Creation and Initialization:  === >></h3>";   

// Creates a new array.
$arr_1 = array("Parth" , "Vatsal" , "Vinit" , "Sagar" , "Rajveer");
$arr_2 = array("Ishika" , "Vani" , "Ishika" , "Riya" , "Vensi");
$arr_3 = array("vishva" , "Tirth" , "Mohhamad" , "Harsh" , "Samarth");
echo("Array-1 :- ");
foreach($arr_1 as $val){
    echo ("'" . $val . "' ");
}
echo("<br> Array-2 :- ");
foreach($arr_2 as $val){
    echo ("'" . $val . "' ");
}
echo("<br> Array-3 :- ");
foreach($arr_3 as $val){
    echo ("'" . $val . "' ");
}

// Merges two or more arrays.
$array_1 = array_merge($arr_1, $arr_2, $arr_3);
echo("<br> Merged Array :- ");
foreach($array_1 as $val){
    echo ("'" . $val . "' ");
}

// Creates an array by using one array for keys and another for its values.
$array_2 = array_combine($arr_1, $arr_2);
echo("<br>Array is created by combining 2 arrays:- ");
foreach($array_2 as $key => $val){
    echo (" ' $key:- $val ' ");
}

// Creates an array containing a range of elements.
$array_3 = range(50 , 100 , 15);
echo("<br>Array is created by combining 2 arrays:- ");
foreach($array_3 as $val){
    echo (" ' $val ' ");
}

//  Array Modification:
echo "<h3>2. Array Modification:  === >></h3>";   

// Adds one or more elements to the end of an array.
echo (" With array_push() Function :- ");
$array_4=array("Name"=>"Parth","Surname"=>"Tandel");
array_push($array_4,"Vinit", "Maheta");
foreach($array_4 as $key=>$val){
    echo (" ' $key=>$val ' ");
}

echo "<br>";

echo (" Without array_push() Function :- ");
$array_5=array("Name"=>"Parth","Surname"=>"Tandel");
$array_5['Age'] = 21;
foreach($array_5 as $key=>$val){
    echo (" ' $key=>$val ' ");
}

echo "<br>";

// Removes the last element from an array.
echo (" With array_pop() Function :- ");
array_pop($array_5);
foreach($array_5 as $key=>$val){
    echo (" ' $key=>$val ' ");
}

echo "<br>";

// Adds one or more elements to the beginning of an array.
echo (" With array_unshift() Function :- ");
array_unshift($array_5, 1078);
foreach($array_5 as $key=>$val){
    echo (" ' $key=>$val ' ");
}

echo "<br>";

// Removes the first element from an array.
echo (" With array_shift() Function :- ");
array_shift($array_5);
foreach($array_5 as $key=>$val){
    echo (" ' $key=>$val ' ");
}

echo "<br>";

//Removes a portion of the array and replaces it with something else.
$array_6=array("En.no"=>"1078","Name"=>"Parth","Surname"=>"Tandel","Age"=>21);
echo (" Without array_splice() Function :- ");
foreach($array_6 as $key=>$val){
    echo (" ' $key=>$val ' ");
}

echo "<br>";

$array_6=array("En.no"=>"1078","Name"=>"Parth","Surname"=>"Tandel","Age"=>21);
$array_7=array("En.no"=>"1038","Name"=>"Vinit");
echo (" With array_splice() Function :- ");
array_splice($array_6,0,2,$array_7);
foreach($array_6 as $key=>$val){
    echo (" ' $key=>$val ' ");
}

// Array Access:
echo "<h3>3. Array Access:  === >></h3>";   

// Counts the number of elements in an array.
echo ("Counts the number of elements in an array:- " . count($array_6) . "<br>");

//Alias of count() means  sizeof($array)
echo ("Size of the array:- " . sizeof($array_6) . "<br>");

//Checks if the given key or index exists in the array.
$array_7 = array(55 , 55 , 55 , 55);
echo ("Checks if the given key or index exists in the array:- ");
echo (var_dump(array_key_exists($key , $array_6))."<br>");
echo ("Checks if the given key or index exists in the array:- ");
echo (var_dump(array_key_exists($key , $array_7)) . "<br>");

// Returns all the keys or a subset of the keys of an array.
echo ("Array keys are returned:- ");
print_r( array_keys($array_6));

echo "<br>";

// Returns all the values of an array.
echo ("Array values are returned:- ");
print_r( array_values($array_6));

echo "<br>";

// Array Search:
echo "<h3> 4. Array Search:  === >></h3>";   

// Checks if a value exists in an array.
echo ("Checks if a value exists in an array :- ");
echo (var_dump(in_array("Vinit", $array_6))."<br>");

// Searches an array for a given value and returns the corresponding key.

echo ("Searches an array for a given value and returns the corresponding key :- ");
echo (var_dump(array_search("Vinit", $array_6))."<br>");

// Returns an array with elements in reverse order.
echo ("Returns an array with elements in reverse order :- ");
$array_8 = array_reverse($array_6);
foreach($array_8 as $key=>$val){
    echo (" ' $key=>$val ' ");
}

// Array Sorting:
echo "<h3> 5. Array Sorting:  === >></h3>";  

//Sorts an array.
$array_9 = array(5 , 6 , 2 , 8 , 3 , 1 , 0);
sort($array_9);
echo ("Sorted array :- ");
foreach($array_9 as $val){
    echo ("$val ");
}

echo "<br>";

// Sorts an array in reverse order.
$array_9 = array(5 , 6 , 2 , 8 , 3 , 1 , 0);
rsort($array_9);
echo ("Sorted array in reverse :- ");
foreach($array_9 as $val){
    echo ("$val ");
}

echo "<br>";

// Sorts an associative array by values.
$array_10=array("En.no"=>"1078","Name"=>"Parth","Surname"=>"Tandel","Age"=>21);
asort($array_10);
echo ("Sorted array by value :- ");
foreach($array_10 as $val){
    echo ("$val ");
}

echo "<br>";

// sorts an associative array by keys.
$array_10=array("En.no"=>"1078","Name"=>"Parth","Surname"=>"Tandel","Age"=>21);
ksort($array_10);
echo ("Sorted array by key :- ");
foreach($array_10 as $val){
    echo ("$val ");
}

echo "<br>";

// Sorts an associative array in reverse order by values.
$array_10=array("En.no"=>"1078","Name"=>"Parth","Surname"=>"Tandel","Age"=>21);
arsort($array_10);
echo ("Sorted array by value in reverse :- ");
foreach($array_10 as $val){
    echo ("$val ");
}

echo "<br>";

// Sorts an associative array in reverse order by keys.
$array_10=array("En.no"=>"1078","Name"=>"Parth","Surname"=>"Tandel","Age"=>21);
krsort($array_10);
echo ("Sorted array by key in reverse :- ");
foreach($array_10 as $val){
    echo ("$val ");
}

// Array Filtering:
echo "<h3> 6. Array Filtering: === >></h3>";  
$array_9 = array(5 , 6 , 2 , 8 , 3 , 1 , 0);

// Filters elements of an array using a callback function.
function odd($var)
{
    // returns whether the input integer is odd
    return $var & 1;
}

function even($var)
{
    // returns whether the input integer is even
    return !($var & 1);
}
$array_11 = array_filter($array_9, "odd");
echo ("Odd values :- ");
foreach($array_11 as $val){
    echo ("$val ");
}

echo "<br>";

$array_11 = array_filter($array_9, "even");
echo ("Even values :- ");
foreach($array_11 as $val){
    echo ("$val ");
}

echo "<br>";

// Applies a callback function to each element of an array.
function cube($n)
{
    return ($n * $n * $n);
}

$array_12 = [1, 2, 3, 4, 5];
$array_13 = array_map('cube', $array_12);
echo ("Cube of every element :- ");
foreach($array_13 as $val){
    echo ("$val ");
}

//Iteratively reduces the array to a single value using a callback function.

function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

function product($carry, $item)
{
    $carry *= $item;
    return $carry;
}

$a = array(1, 2, 3, 4, 5);
$x = array();
echo "<br>";

echo "Sum :- "; 
echo ("<br>".var_dump(array_reduce($a, "sum")));

echo "Product:- "; 
echo ("<br>".var_dump(array_reduce($a, "product", 10)));

echo "Sum and NOthing :- ";
echo(var_dump(array_reduce($x, "sum", "No data to reduce")));

echo "<br>";

//Extracts a portion of the array.
$ar = array('a'=>'apple', 'b'=>'banana', '42'=>'pear', 'd'=>'orange');
print_r(array_slice($ar, 0, 3));
echo "<br>";
print_r(array_slice($ar, 0, 3, true));

echo "<br>";

// Removes a portion of the array and replaces it with something else.
$array_6=array("En.no"=>"1078","Name"=>"Parth","Surname"=>"Tandel","Age"=>21);
$array_7=array("En.no"=>"1038","Name"=>"Vinit");
echo (" With array_splice() Function :- ");
array_splice($array_6,0,2,$array_7);
foreach($array_6 as $key=>$val){
    echo (" ' $key=>$val ' ");
}