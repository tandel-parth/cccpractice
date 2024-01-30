<?php
class Point {
    public $x;
    public $y;
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function calculateDistance(Point $second_point) {
        echo "Distance between two points ($this->x , $this->y) and  ($second_point->x , $second_point->y) : ". round(sqrt(pow($this->x - $second_point->x, 2) + pow($this->y - $second_point->y, 2)),2);
    }
}

$point1 = new Point(2,3);
$point2 = new Point(4,5);
echo $point1->calculateDistance($point2);

?>