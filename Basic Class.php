<?php

// 1. Basic Class & Properties

class Fruit {
    public $name;
    public $color;

    function set_details($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    function get_details() {
        echo "Name: " . $this->name . ". Color: " . $this->color . ".<br>";
    }
}

$apple = new Fruit();
$apple->set_details('Apple', 'Red');
$apple->get_details();

$banana = new Fruit();
$banana->set_details('Banana', 'Yellow');
$banana->get_details();

echo "<hr>";


// 2. Constructor

class FruitWithConstructor {
    public $name;
    public $color;

    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    function get_details() {
        echo "Name: " . $this->name . ". Color: " . $this->color . ".<br>";
    }
}

$apple2 = new FruitWithConstructor('Apple', 'Red');
$apple2->get_details();

$banana2 = new FruitWithConstructor('Banana', 'Yellow');
$banana2->get_details();

echo "<hr>";


// 3. Destructor

class FruitWithDestructor {
    public $name;
    public $color;

    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    function __destruct() {
        echo "Destroyed - Name: " . $this->name . ". Color: " . $this->color . ".<br>";
    }
}

$apple3 = new FruitWithDestructor('Apple', 'Red');
$banana3 = new FruitWithDestructor('Banana', 'Yellow');

echo "<hr>";


// 4. Access Modifier (public)

class FruitPublic {
    public $name;

    public function get_details() {
        echo "Name: " . $this->name . ".<br>";
    }
}

$apple4 = new FruitPublic();
$apple4->name = "Apple"; // Bisa diakses langsung karena public
$apple4->get_details();
?>