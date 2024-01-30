<?php
class Shape
{
    public function title(){
        echo "<h3>Area and Perimeter of Shapes</h3>";
    }
}

class Circle extends Shape
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        echo "Circle Area :- " . round((pi() * pow($this->radius, 2)), 2);
    }

    public function calculatePerimeter()
    {
        echo "Circle Perimeter:- " . round((2 * pi() * $this->radius) , 2);
    }
}

class Rectangle extends Shape
{
    public $length;
    public $width;

    public function __construct($length, $width){
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea()
    {
        echo "Recrangle Area :- " . $this->length * $this->width;
    }

    public function calculatePerimeter()
    {
        echo "Recrangle Perimeter :- " . 2 * ($this->length + $this->width);
    }
}

// Example Usage:
$circle = new Circle(5);
$rectangle = new Rectangle(4,6);

$circle->title();
$circle->calculateArea();
echo "<br>";
$circle->calculatePerimeter();
echo "<br>";
$rectangle->calculateArea();
echo "<br>";
$rectangle->calculatePerimeter();   