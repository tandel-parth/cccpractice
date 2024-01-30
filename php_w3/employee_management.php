<?php
class Employee {
    public $name;
    public $position;
    public $salary;

    public function __construct($name, $position, $salary){
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
    }

    public function calculateYearlyBonus() {
        echo"15% bonus at salary : ". $this->salary * 0.15 . "₹";
    }
}

// Example Usage:
$employee = new Employee("Parth Tandel","Intern",5000);

echo $employee->calculateYearlyBonus();

?>