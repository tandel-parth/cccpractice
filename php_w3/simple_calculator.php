<?php
class Calculator {
    public function add($a, $b) {
        echo "Sum of $a and $b : " . ($a + $b);
    }

    public function subtract($a, $b) {
        echo "Subtraction of $a and $b : " . ($a - $b);
    }

    public function multiply($a, $b) {
        echo "Multiplication of $a and $b : " . ($a * $b);
    }

    public function divide($a, $b) {
        if ($b != 0) {
            echo "Divition of $a and $b : " . ($a / $b);
        } else {
            echo "Cannot divide by zero";
        }
    }
}
$calculator = new Calculator();
$calculator->add(8,2);
echo "<br>";
$calculator->subtract(4,14);
echo "<br>";
$calculator->multiply(-2,5);
echo "<br>";
$calculator->divide(20,2);

// echo "<br>";

// class abc{
//     private $name = 'abc';
//     private $age = 25;

//     public function __get($name)
//     {
//         echo "Private property(name) value : ".$this->name ;
//         echo "<br>";
//         echo "Private property(name) value : ".$this->age ;
//     }
// }
// $a = new abc();
// $a->name;
?>