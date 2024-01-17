<?php

// String Length 

/* $string = "Parth";
    echo strlen($string); */

// string replace 

/* $S_replace = "Hello World";  
    echo (str_replace("World", "Parth!", $S_replace)); */

// String POSITION

/* $S_pos = "Hello World";
    echo (strpos($S_pos , "World")); */

// Sub string

/* $S_sub = "Hello World";
    echo substr($S_sub, 6, 5); */

//lowercase string

/* $S_lower ="PARTH";
    echo strtolower($S_lower); */

// uppercase string

/* $S_upper ="parth";
    echo strtoupper($S_upper); */

// trim string

/* $S_trim = "  Parth Tandel ";
echo "<input value='" . $S_trim . "'> <br> <br> <input value='" . trim($S_trim) . "'>"; */

//Joins array elements with a string

/* $S_impload = array('Hello','My','Friend');
echo implode(" ",$S_impload); */

// String Explode

/* $str = "Hello.Parth.Tandel";
$S_explode = explode(".", $str);
print_r($S_explode); */

// Converts special characters to HTML entities.

/* $S_html_char = "<b>World</b> in this html tag are not work";
echo htmlspecialchars($S_html_char); */

// html entities

/* $S_html_entities = '<a href="https://www.google.com">Go to google.com</a>';
echo htmlentities($S_html_entities);*/

//  nl2br($string)

/* $S_nl2br = "First line.\n Second line. \n Third line.";
echo nl2br($S_nl2br); */

// String Repeat

/* $S_repeat = "Hello ";
echo str_repeat($S_repeat ,5); */

// String reverse

/* $S_reverse = "Hello";
echo strrev($S_reverse); */

// String Shuffle

/* $S_shuffle = "Hello";
echo str_shuffle($S_shuffle); */

// String split

/* $S_split = "Hello world";
print_r(str_split($S_split,3)); */

// String word count

/* $S_count = "Hello world";
echo str_word_count($S_count); */

// Sub string replace

/* $str1 = "Parth";
$str2 = ".Tandel";

echo substr_replace($str1 , $str2 ,1); */

// String pad

/* $S_pad = "Hello ";
echo str_pad($S_pad,8,"P"); */

// String Compares 

$S_com2 = "Parth";
$S_com1 = "Parth Tandel";
echo strcmp($S_com1, $S_com2);