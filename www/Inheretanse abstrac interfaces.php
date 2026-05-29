<?php

// 1. Inheritance (Pewarisan)

class Fruit {
    public $name;
    public $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro() {
        echo "The fruit is $this->name and the color is $this->color.<br>";
    }
}

class Strawberry extends Fruit {
    public function message() {
        echo "Am I a fruit or a berry? <br>";
    }
}

$strawberry = new Strawberry("Strawberry", "red");
$strawberry->intro();
$strawberry->message();

echo "<hr>";


// 2. Abstract Class

abstract class Car {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function intro();
}

class Audi extends Car {
    public function intro() {
        echo "German quality! I'm an $this->name!<br>";
    }
}

class Citroen extends Car {
    public function intro() {
        echo "French extravagance! I'm a $this->name!<br>";
    }
}

$audi = new Audi("Audi");
$audi->intro();

$citroen = new Citroen("Citroen");
$citroen->intro();

echo "<hr>";


// 3. Interface

interface Animal {
    public function makeSound();
}

class Cat implements Animal {
    public function makeSound() {
        echo "Meow<br>";
    }
}

class Dog implements Animal {
    public function makeSound() {
        echo "Woff<br>";
    }
}

$cat = new Cat();
$cat->makeSound();

$dog = new Dog();
$dog->makeSound();
?>