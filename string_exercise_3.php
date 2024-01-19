<?php
echo "<h2> Exercise - 3 </h2>";

$sentence = "The quick brown fox jumps over the lazy dog";

// 1. Find the position of the word "fox" in the sentence.
echo ("<b>Poition of the word 'fox':- </b>" . strpos($sentence , "fox"));

echo "<br>";

// 2. Check if the word "cat" is present in the sentence.
if (strpos($sentence , "cat") == false){
    echo ("<b>Check if the word 'cat' is present:- </b>Not found");
}else {
    echo ("<b>Check if the word 'cat' is present on </b>" . strpos($sentence , "cat") . "<b>Position.</b>");
}

echo "<br>";

// 3. Extract and print the first 20 characters of the sentence.
echo ("<b>First 20 characters:- </b>". substr($sentence, 0 ,20));

?>