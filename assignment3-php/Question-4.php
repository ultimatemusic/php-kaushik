<!-- Write a PHP script to create a class representing a "Car" with properties like make, model, -->
<!-- and year, and a method to display the car details -->




<?php
class Car {
    // Properties
    public $make;
    public $model;
    public $year;

    // Constructor to initialize the car's properties
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Method to display car details
    public function displayDetails() {
        echo "Car Details:\n";
        echo "Make: " . $this->make . "\n";
        echo "Model: " . $this->model . "\n";
        echo "Year: " . $this->year . "\n";
    }
}

// Create an object of the Car class
$myCar = new Car("Toyota", "Corolla", 2025  );

// Call the method to display car details
$myCar->displayDetails();
?>
