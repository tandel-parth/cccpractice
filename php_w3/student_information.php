<?php
class Student {
    public $name;
    public $age;
    public $grade;

    public function __construct($name = "Not Specified", $age = "Not Specified", $grade = "Not Specified"){
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }
    public function displayInfo() {
        echo "Name: $this->name <br> Age: $this->age <br> Grade: $this->grade";
    }
}

$student = new Student("Parth",20,"A+");
$student->displayInfo();
?>