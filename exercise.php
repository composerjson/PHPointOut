<?php
class Engine1 { // Loosely coupled classes example with dependency injection
    public function start() {
        return "Engine started";
    }
}
class Car1 {
    private $engine;
    public function __construct(Engine1 $engine) {
        $this->engine = $engine;
    }
    public function start() {
        return $this->engine->start();
    }
}
$eng = new Engine1();
$car = new Car1($eng);
echo $car->start();

//way two

class Eng {
    public function start() {
        return "Engine started";
    }
}

class Cr {
    private $engine;

    public function __construct(Eng $engine) {
        $this->engine = $engine;
    }

    public function start() {
        return $this->engine->start();
    }
}
$car = new Cr(new Eng()); // Create an instance of Car without explicitly[স্পষ্টভাবে] creating an instance of Eng 
// Call the start method on Car
echo $car->start();

/* exapmle js
Explicitly something clear/defined
Explicitly declaring an integer variable int ag = 25;
x = 10
y = float(x) */

$numString = "42";
$numInt = (int)$numString; // Explicitly converting a string to an integer


// Explicit Class Definitions
class Ca {
    // Explicitly defined properties
    public $model;
    private $engine;
    // Explicitly defined constructor
    public function __construct($model, $engine) {
        $this->model = $model;
        $this->engine = $engine;
    }
    // Explicitly defined method
    public function start() {
        return "Engine started for $this->model";
    }
}

// Unexplicit code example
function add($a, $b) {
    return $a + $b;
}
$result = add("5", "10");
echo $result;

// Explicit code example
function addNumbers(int $a, int $b): int {
    return $a + $b;
}
$result = addNumbers(5, 10);
echo $result;



// =============================================


class Engine { // Loosely coupled classes example with dependency injection
    public function start1() {
        return "Engine started";
    }
}
class Car {
    private $engine;
    public function __construct(Engine $engine) {
        $this->engine = $engine;
    }
    public function start() {
        return $this->engine->start1();
    }
}
$engine = new Engine();
// Create an instance of Car, passing the Engine instance
$car = new Car($engine);
// Call the start method on Car
echo $car->start();

