<?php

function generateFibonacci($num_Terms) {
    $fibonacci_Series = [];
    $fibonacci_Series[] = 0;
    $fibonacci_Series[] = 1;

    for ($i = 2; $i < $num_Terms; $i++) {
        $fibonacci_Series[] = $fibonacci_Series[$i - 1] + $fibonacci_Series[$i - 2];
    }
    return $fibonacci_Series;
}
$num_Terms = 20;
$fibonacci_Series = generateFibonacci($num_Terms);
echo "Fibonacci Series (first $num_Terms terms): ";
echo implode(", ", $fibonacci_Series);

?>
