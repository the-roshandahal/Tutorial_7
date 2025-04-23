<?php
class Car {
    private $name;
    private $year;

    public function __construct($name, $year) {
        $this->name = $name;
        $this->year = $year;
        echo "Car object created: $name - $year<br>";
    }

    public function __destruct() {
        echo "Car object destroyed: " . $this->name . " - " . $this->year . "<br>";
    }
}

$ford = new Car("Ford", 2021);

?>