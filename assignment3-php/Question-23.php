<!-- Discuss the visibility of properties and methods in PHP (public, private, protected). -->




 <!-- 1. public -->

 <?php
 class Example {
    public $name = "Sanket";

    public function sayHello() {
        echo "Hello, $this->name!";
    }
}

$obj = new Example();
echo $obj->name;        
$obj->sayHello();       
?>

 <!-- 2. private -->

<?php
class Example {
    private $secret = "Hidden";

    private function reveal() {
        echo $this->secret;
    }

    public function show() {
        $this->reveal(); //  Allowed: inside class
    }
}

$obj = new Example();
// echo $obj->secret;      
// $obj->reveal();         
$obj->show();              



?>


<!-- 3. protected -->


<?php



class Base {
    protected $data = "Protected Data";

    protected function showData() {
        echo $this->data;
    }
}

class Child extends Base {
    public function display() {
        $this->showData(); // Allowed in child class
    }
}

$obj = new Child();
// echo $obj->data;        //  Error: Protected property
// $obj->showData();       //  Error: Protected method
$obj->display();           //  Allowed via public method



?>



