<?php
class Car {
    public $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function printDetails() {
        echo "Car Name: " . $this->name;
    }
}

class Ford extends Car {
    public $country;
    
    public function __construct($name, $country) {
        $this->country = $country;
    }
    
    public function printDetails() {
        echo "Car Name: " . $this->name . " - Country: " . $this->country;
    }
}

$ford = new Ford("Ford", "USA");

$ford->printDetails();
?>