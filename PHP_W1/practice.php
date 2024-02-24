<?php
// echo "( 3 )  Pattern<br>";
// for ($i = 5; $i > 0; $i--) {
//     for ($j = 1; $j <= 5; $j++) {
//         if ($j <= $i) {
//             echo $j;
//         }
//     }
//     echo "<br>";
// }

// for($i=0 ; $i <= 5; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo "*";
//     }
//     echo "<br>";
// }
// // Assuming $a is 10% higher than $b
// $a = 110;  // Replace with the actual value of $a

// // Calculate $b
// $b = $a / 1.10;

// // Calculate how much lower $b is than $a
// $difference = $a - $b;

// // Print the result
// echo "If \$a is 10% higher than \$b, then \$b is " . number_format($difference, 2) . " lower than \$a.";
class abc{
    public $a = 0;
    public function __construct(){
        $this->a = 123;
        $this->lol();
    }
    public function lol(){
        $this->a = 1;
        return $this->a;
    }
    public function lol1(){
        $this->a = 2;
        return $this->a;
    }
}
$obj = new abc();
echo $obj->lol();
echo $obj->lol1();
?>
