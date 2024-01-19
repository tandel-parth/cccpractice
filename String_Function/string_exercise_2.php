<?php
echo "<h2> Exercise - 2 </h2>";

$text = "Hello, World! How are you doing?";

// 1. Find the length of the string.
echo ("<b>Length of the string:- </b>".strlen($text));

echo "<br>";

// 2. Convert the entire string to lowercase.
echo ("<b>Entire string to lowercase:- </b>".strtolower($text));

echo"<br>";

// 3. Convert the entire string to uppercase.
echo ("<b>Entire string to uppercase:- </b>".strtoupper($text));

echo"<br>";

// 4. Replace "How are you doing?" with "Fine, thank you!".
echo("<b>New string:- </b>". str_replace("How are you doing?","Fine, thank you!", $text));

echo "<br>";

// 5. Extract and print the first 10 characters of the string.
echo ("<b>First 10 characters:- </b>". substr($text, 0 ,10));

echo "<br>";

//6. Extract and print the substring starting from the 8th character to the end.
echo ("<b>8th character to the end.:- </b>". substr($text, 7));

?>