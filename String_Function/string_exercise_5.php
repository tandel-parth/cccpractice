<?php
echo "<h2> Exercise - 5 </h2>";

$quote = "In three words I can sum up everything I've learned about life: it goes on.";

// 1. Count the total number of words in the quote.
echo ("<b>Total number of words:- </b>" . str_word_count($quote));

echo "<br>";

// 2. Convert the entire quote to lowercase.
echo ("<b>Entire quote to lowercase:- </b>" . strtolower($quote));

echo "<br>";

// 3. Capitalize the first letter of each word in the quote.
echo ("<b>Capitalize the first letter of each word:- </b>" . ucwords($quote));

?>