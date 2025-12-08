<?php
    // Global variable is used to store data in global scope
    //we can use global variable in function by using global keyword
    $name = "Kaushik"; // Global variable
    function myFunction() {
        global $name;
        echo "My name is: " . $name;
    }
    myFunction();

    //local variable is used to store data in local scope
    function myFunction2() {
        $name = "Kaushik"; // Local variable
        echo "<br>";
        echo "My name is: " . $name;
    }
    myFunction2();
?>