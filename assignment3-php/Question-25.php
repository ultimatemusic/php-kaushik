<!-- Explain type hinting in PHP and its benefits. -->




<!-- 
What is Type Hinting in PHP?
Type hinting (also called type declarations) in PHP means specifying
the expected data type of function/method parameters, return values, and class properties.

It helps ensure that the correct type of value is passed or returned — improving code safety, 
clarity, and debugging. -->


 <!-- Example: Type Hinting with Parameters and Return Types -->



 <?php

class Calculator {
    // Parameters and return value type-hinted
    public function add(int $a, int $b): int {
        return $a + $b;
    }

    public function greet(string $name): string {
        return "Hello, $name!";
    }
}

$calc = new Calculator();
echo $calc->add(10, 5);        // Output: 15
echo $calc->greet("Sanket");   // Output: Hello, Sanket!

?>
