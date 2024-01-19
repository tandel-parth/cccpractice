<?php
echo "<h2> Exercise - 4 </h2>";

$name = "John";

// 1. Pad the string with underscores (`_`) on the left side to make its total length 10 characters.
echo("<b>Pad underscores (`_`) from the starting:- </b>" . str_pad($name,10,"_",STR_PAD_LEFT ));

echo("<br>");

// 2. Pad the string with asterisks (`*`) on the right side to make its total length 8 characters.
echo("<b>Pad underscores (`_`) from the ending:- </b>" . str_pad($name,8,"*",STR_PAD_RIGHT));

?>