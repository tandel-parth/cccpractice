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

/* $S_com2 = "Parth";
$S_com1 = "Parth Tandel";
echo strcmp($S_com1, $S_com2); */

// string local compair

/* $S_coll1 = "Parth TAndel";
$S_coll2 = "Parth TAndel";
echo strcoll($S_coll1, $S_coll2); */

// Finds the length of the initial segment not matching a mask.

/* $S_cspn = "Parth Tandel";
echo strcspn($S_cspn,"T"); */

//stristr($haystack, $needle, $before_needle):- Case-insensitive search for the first occurrence of a string.

/* $S_istr = "Parth Tandel";
echo stristr($S_istr , "TANDEL"); */

//strpbrk($string, $char_list):- Searches a string for any of a set of characters.

/* $S_pbrk1 = "Parth Tandel";
$S_pbrk2 = "tandel Parth";
echo strpbrk($S_pbrk1 ,"hr");
echo"<br>";
echo strpbrk($S_pbrk2 ,"Pr"); */

// strstr($haystack, $needle, $before_needle):- Finds the first occurrence of a string.

/* $S_str = "Parth Tandel!";
echo strstr($S_str,"th"); */

//  strtr($string, $from, $to):- Translates characters or replaces substrings.

/* $S_tr = "Pokth Tandel!";
echo strtr($S_tr, "ok", "ar"); */

// ucfirst($string):- Converts the first character of a string to uppercase.

/* $S_ucfirst = "parth Tandel!";
echo ucfirst($S_ucfirst); */

//ucwords($string):- Converts the first character of each word in a string to uppercase.

/* $S_ucwords = "parth tandel!";
echo ucwords($S_ucwords); */

?>