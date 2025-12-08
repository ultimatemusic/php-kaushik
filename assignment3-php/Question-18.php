 <!-- Create a class that uses magic methods to handle property access and modification
dynamically. -->





 <!-- Example: Dynamic Property Handling Using Magic Methods in PHP -->


 <?php

class DynamicUser {
    // Private array to hold dynamic properties
    private $data = [];

    // Magic method to set values dynamically
    public function __set($name, $value) {
        echo "Setting '$name' to '$value'\n";
        $this->data[$name] = $value;
    }

    // Magic method to get values dynamically
    public function __get($name) {
        if (array_key_exists($name, $this->data)) {
            echo "Getting '$name'\n";
            return $this->data[$name];
        } else {
            echo "Property '$name' does not exist.\n";
            return null;
        }
    }

    // Optional: show all dynamic data
    public function showData() {
        print_r($this->data);
    }
}

// Using the class
$user = new DynamicUser();

// Dynamically set properties
$user->name = "Sanket";
$user->email = "sanket@devganiya.com";
$user->age = 25;

// Dynamically get properties
echo $user->name . "\n";    // Output: Sanket
echo $user->email . "\n";   // Output: sanket@devganiya.com
echo $user->location . "\n"; // Output: Property does not exist.

$user->showData(); // Optional: display all dynamic data

?>
