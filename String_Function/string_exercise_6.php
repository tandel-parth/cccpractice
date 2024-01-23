<?php

function calculateB($a) {
    $b = $a / (1 + 0.10);
    return $b;
}

$a = 500;
$b = number_format(calculateB($a), 2);

echo "$a is 10% higher than $b";
echo "<br>";
echo "$b is " . (($a - $b)/$a)*100 . "% lower than $a";

?>
