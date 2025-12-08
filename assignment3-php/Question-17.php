<!-- Define magic methods in PHP. Discuss commonly used magic methods like get(),
set(), and construct(). -->



<!-- What Are Magic Methods in PHP?
Magic methods in PHP are special built-in methods that start with double underscores (__).
They are automatically triggered by specific actions on objects, such as object creation, 
property access, method calls, etc -->

<!-- 
| Magic Method    | Triggered When...                               |
| --------------- | ----------------------------------------------- |
| `__construct()` | An object is created                            |
| `__destruct()`  | An object is destroyed                          |
| `__get()`       | Accessing an inaccessible or undefined property |
| `__set()`       | Setting an inaccessible or undefined property   |
| `__call()`      | Calling an undefined or inaccessible method     |
| `__toString()`  | Object is treated as a string                   |
| `__isset()`     | `isset()` is used on an inaccessible property   |
| `__unset()`     | `unset()` is used on an inaccessible property   | -->



 <!-- __construct() – Constructor -->


<?php
 class Person {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

?>



<!-- __get() – Intercept Property Read -->


<?php
class Student {
    private $data = ["name" => "Sanket"];

    public function __get($property) {
        return $this->data[$property] ?? "Property does not exist.";
    }
}

$obj = new Student();
echo $obj->name;  // Output: Sanket

?>




<!-- __set() – Intercept Property  -->


<?php

class Student {
    private $data = [];

    public function __set($property, $value) {
        $this->data[$property] = $value;
    }

    public function __get($property) {
        return $this->data[$property] ?? null;
    }
}

$obj = new Student();
$obj->name = "Sanket";
echo $obj->name;  // Output: Sanket



?>