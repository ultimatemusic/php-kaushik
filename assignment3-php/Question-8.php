<!-- Create a "Vehicle" class and extend it with a "Car" class. Include properties and methods in -->
<!-- both classes, demonstrating inherited behavior -->


<?php
// Parent class
class Vehicle {
    public $brand;
    public $speed;

    // Constructor for Vehicle
    public function __construct($brand) {
        $this->brand = $brand;
        $this->speed = 0; // Default speed
    }

    // Method to start the vehicle
    public function start() {
        echo $this->brand . " is starting...\n";
    }

    // Method to accelerate
    public function accelerate($increase) {
        $this->speed += $increase;
        echo $this->brand . " is now going at " . $this->speed . " km/h.\n";
    }
}

// Child class that extends Vehicle
class Car extends Vehicle {
    public $model;
    public $fuelType;

    // Constructor for Car
    public function __construct($brand, $model, $fuelType) {
        // Call parent constructor to initialize brand
        parent::__construct($brand);
        $this->model = $model;
        $this->fuelType = $fuelType;
    }

    // Additional method specific to Car
    public function displayDetails() {
        echo "Car Details:\n";
        echo "Brand: " . $this->brand . "\n";
        echo "Model: " . $this->model . "\n";
        echo "Fuel Type: " . $this->fuelType . "\n";
        echo "Current Speed: " . $this->speed . " km/h\n\n";
    }
}

// Create a Car object
$myCar = new Car("Toyota", "Corolla", "Petrol");

// Call inherited and custom methods
$myCar->start();               // Inherited from Vehicle
$myCar->accelerate(50);        // Inherited from Vehicle
$myCar->displayDetails();      // Defined in Car
?>





