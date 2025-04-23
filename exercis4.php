<?php
define("PI", 3.14);

class CircleArea {
    public $radius;
    
    public function __construct($r) {
        $this->radius = $r;
        $area = PI * $this->radius * $this->radius;
        echo "Circle created with radius $r. Area is: $area<br>";
    }
    
    public function __destruct() {
        echo "Circle with radius $this->radius is being removed.<br>";
    }
}

$r = new CircleArea(5);

?>