<!-- Define an interface named VehicleInterface with methods like start(), stop(), and
implement this interface in multiple classes. -->



<?php

// Define the interface
interface VehicleInterface {
    public function start();
    public function stop();
}

// Implementing the interface in the Car class
class Car implements VehicleInterface {
    public function start() {
        echo "Car engine started.\n";
    }

    public function stop() {
        echo "Car engine stopped.\n";
    }
}

// Implementing the interface in the Bike class
class Bike implements VehicleInterface {
    public function start() {
        echo "Bike started.\n";
    }

    public function stop() {
        echo "Bike stopped.\n";
    }
}

// Implementing the interface in the Truck class
class Truck implements VehicleInterface {
    public function start() {
        echo "Truck is now running.\n";
    }

    public function stop() {
        echo "Truck has been turned off.\n";
    }
}

// Test the implementations
$vehicles = [
    new Car(),
    new Bike(),
    new Truck()
];

foreach ($vehicles as $vehicle) {
    $vehicle->start();
    $vehicle->stop();
    echo "-----------------\n";
}

?>
