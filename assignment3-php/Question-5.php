<!-- What is an object in OOP? Discuss how objects are instantiated from classes in PHP -->
<?php


// What is an Object in OOP?
// In Object-Oriented Programming (OOP), an object is an instance of a class. It represents a real-world entity with attributes (properties) and behaviors (methods). Objects hold actual data and can perform operations defined by their class.

// Think of a class as a blueprint (like a house design), and an object as the actual house built from that blueprint.



//  Key Features of an Object:
// Encapsulates data (properties).

// Encapsulates behavior (methods).

// Can interact with other objects.

// Created using the class definition.





// How Objects are instantiated from Classes in PHP:


// Define a class
class Car {
    public $make;
    public $model;

    // Constructor to initialize properties
    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    // Method to display details
    public function display() {
        echo "Make: " . $this->make . "\n";
        echo "Model: " . $this->model . "\n";
    }
}

// Instantiate (create) an object from the Car class
$myCar = new Car("Honda", "Civic");

// Access object methods
$myCar->display();

?>