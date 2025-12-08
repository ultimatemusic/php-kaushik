<!-- Create a class with static properties and methods, and demonstrate their access using the
scope resolution operator. -->


 <!-- Example: Using Static Properties  -->



 <?php

class Calculator 

{
    // Static property
    public static $count = 0;

    // Static method to add two numbers
    public static function add($a, $b) 
    
    {
        self::$count++; // Accessing static property inside the class using self::
        return $a + $b;
    }

    // Static method to get how many times the add() method was called
    public static function getCount() 
    
    {
        return self::$count;
    }
}

// Accessing static method using ClassName::
echo "Sum: " . Calculator::add(10, 20) . "\n";  // Output: Sum: 30
echo "Sum: " . Calculator::add(5, 7) . "\n";    // Output: Sum: 12

// Accessing static property using ClassName::
echo "Total operations: " . Calculator::$count . "\n"; // Output: 2

// Or using static method to get count
echo "Operations via method: " . Calculator::getCount() . "\n"; // Output: 2

?>
