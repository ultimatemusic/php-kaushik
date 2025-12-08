<!-- Define traits in PHP and their purpose in code reuse -->




<!-- What are Traits in PHP?
Traits in PHP are a mechanism for code reuse in single inheritance languages like PHP.

They allow you to share methods and logic across multiple classes without using inheritance. 
Traits help solve the problem of code duplication and limited multiple inheritance in PHP. -->


<!-- Syntax of Traits -->


<?php


trait TraitName {
    }


?>


<!-- Example: Using a Trait in PHP -->



<?php

// Define a trait
trait Logger {
    public function log($message) {
        echo "[LOG]: $message\n";
    }
}

// First class using the trait
class User {
    use Logger;

    public function create() {
        $this->log("User created.");
    }
}

// Second class using the same trait
class Product {
    use Logger;

    public function save() {
        $this->log("Product saved.");
    }
}

// Test the trait in action
$user = new User();
$user->create();  // Output: [LOG]: User created.

$product = new Product();
$product->save(); // Output: [LOG]: Product saved.

?>





