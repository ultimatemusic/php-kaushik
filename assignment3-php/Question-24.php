<!-- Write a class that shows examples of each visibility type and how they restrict access to
properties and methods. -->

<!-- Example: Class with All Three Visibility Types -->




<?php

class VisibilityExample {
    // Properties with different visibility
    public $publicProp = "Public Property";
    protected $protectedProp = "Protected Property";
    private $privateProp = "Private Property";

    // Methods with different visibility
    public function showPublic() {
        echo "Public Method: Accessible everywhere\n";
    }

    protected function showProtected() {
        echo "Protected Method: Accessible inside class and child class\n";
    }

    private function showPrivate() {
        echo "Private Method: Accessible only inside the class\n";
    }

    // Method to access all members from inside the class
    public function accessAll() {
        echo $this->publicProp . "\n";
        echo $this->protectedProp . "\n";
        echo $this->privateProp . "\n";

        $this->showPublic();
        $this->showProtected();
        $this->showPrivate();
    }
}

// Child class to demonstrate protected access
class ChildVisibility extends VisibilityExample {
    public function accessParent() {
        echo $this->publicProp . "\n";        // Allowed
        echo $this->protectedProp . "\n";     //  Allowed
        // echo $this->privateProp . "\n";    //  Not allowed

        $this->showPublic();                  //  Allowed
        $this->showProtected();               //  Allowed
        // $this->showPrivate();              //  Not allowed
    }
}

// Create object
$obj = new VisibilityExample();

echo "--- Accessing from Outside ---\n";
echo $obj->publicProp . "\n";               //  Allowed
// echo $obj->protectedProp . "\n";         //  Error
// echo $obj->privateProp . "\n";           //  Error

$obj->showPublic();                         //  Allowed
// $obj->showProtected();                  //  Error
// $obj->showPrivate();                    //  Error

echo "--- Accessing All from Within Class ---\n";
$obj->accessAll();                          // Allowed: accessing all inside the class

echo "--- Accessing from Child Class ---\n";
$child = new ChildVisibility();
$child->accessParent();                     //Shows public & protected members

?>
