<!-- Create a class with a constructor that initializes properties when an object is created. -->



 <!-- Example: Class with Constructor in PHP -->



 <?php

class Student {
    // Properties
    public $name;
    public $rollNumber;
    public $course;

    // Constructor method to initialize properties
    public function __construct($name, $rollNumber, $course) {
        $this->name = $name;
        $this->rollNumber = $rollNumber;
        $this->course = $course;
    }

    // Method to display student info
    public function displayInfo() {
        echo "Name: $this->name\n";
        echo "Roll Number: $this->rollNumber\n";
        echo "Course: $this->course\n";
    }
}

// Create an object of Student class
$student1 = new Student("Sanket", 101, "PHP DEWELOPAR");

// Call the method to display student details
$student1->displayInfo();

?>


