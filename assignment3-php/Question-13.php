<!--What is a constructor in PHP? Discuss its purpose and how it is used. -->


<!-- What is a Constructor in PHP?


A constructor is a special method in a class that is automatically 
called when a new object of that class is created.



 Syntax of a Constructor in PHP -->

<?php
class ClassName {
    public function __construct() {
        // Code to initialize the object
    }
}
?>



<!-- Example: Constructor in PHP -->


<?php

class Person {
    public $name;
    public $age;

    // Constructor method
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        echo "Hi, I am $this->name and I am $this->age years old.\n";
    }
}

// Creating an object
$person1 = new Person("Sanket", 18);
$person1->introduce();  // Output: Hi, I am Sanket and I am 18 years old.

?>



















