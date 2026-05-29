<?php

// 1. Traits

trait message1 {
    public function msg1() {
        echo "PHP OOP is fun! <br>";
    }
}

class Welcome {
    use message1;
}

$obj = new Welcome();
$obj->msg1();

echo "<hr>";


// 2. Constants

class Goodbye {
    const MESSAGE = "Thank you for visiting W3Schools.com!";

    public function bye() {
        echo self::MESSAGE . "<br>";
    }
}

$goodbye = new Goodbye();
$goodbye->bye();

echo "<hr>";


// 3. Static Properties

class Pi {
    public static $value = 3.14159;
}

class X extends Pi {
    public function xStatic() {
        return parent::$value;
    }
}

echo X::$value . "<br>";

$x = new X();
echo $x->xStatic() . "<br>";

echo "<hr>";


// 4. Static Methods

class Domain {
    protected static function getWebsiteName() {
        return "W3Schools.com";
    }
}

class DomainW3 extends Domain {
    public $websiteName;

    public function __construct() {
        $this->websiteName = parent::getWebsiteName();
    }
}

$domainW3 = new DomainW3();
echo $domainW3->websiteName . "<br>";
?>