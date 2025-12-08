<!-- Explain the concept of abstraction and the use of interfaces in PHP. -->



 <!-- 1. Abstract Classes in PHP -->


 <!-- An abstract class:

1.Cannot be instantiated directly.

2.Can have both abstract methods (without body) and concrete methods (with body).

3.Must be extended by a child class, which must implement all abstract methods. -->



<?php

abstract class Animal {
    // Abstract method (no body)
    abstract public function makeSound();

    // Concrete method
    public function eat() {
        echo "This animal is eating.\n";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Bark!\n";
    }
}

$dog = new Dog();
$dog->makeSound(); // Output: Bark!
$dog->eat();       // Output: This animal is eating.

?>






 <!-- 2. Interfaces in PHP -->



<!-- 
1.It only defines method signatures (no implementation).

2.A class that implements an interface must define all the methods in the interface.

3.A class can implement multiple interfaces, which is not possible with abstract classes 
(since PHP doesn't support multiple inheritance). -->


<?php

interface Shape {
    public function getArea();
    public function getPerimeter();
}

class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }

    public function getPerimeter() {
        return 2 * ($this->width + $this->height);
    }
}

$rect = new Rectangle(10, 5);
echo "Area: " . $rect->getArea() . "\n";           // Output: 50
echo "Perimeter: " . $rect->getPerimeter() . "\n"; // Output: 30

?>
