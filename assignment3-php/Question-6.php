<!-- Instantiate multiple objects of the "Car" class and demonstrate how to access their -->
<!-- properties and methods. -->


<?php
// Define the Car class
class Car {
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
        echo "Year: " . $this->year . "\n\n";
    }
}

// Instantiate multiple objects
$car1 = new Car("Toyota", "Camry", 2020);
$car2 = new Car("Honda", "Accord", 2022);
$car3 = new Car("Ford", "Mustang", 2023);

// Access and display their details
$car1->displayDetails();
$car2->displayDetails();
$car3->displayDetails();
?>
