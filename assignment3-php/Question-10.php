<!-- Create a class that demonstrates method overloading by defining multiple methods with the -->
<!-- same name but different parameters. -->




<?php

class Calculator
{
    // This magic method is triggered when invoking inaccessible methods in an object context.
    public function __call($name, $arguments)
    {
        if ($name == 'add') {
            $count = count($arguments);
            if ($count == 2) {
                return $this->addTwo($arguments[0], $arguments[1]);
            } elseif ($count == 3) {
                return $this->addThree($arguments[0], $arguments[1], $arguments[2]);
            } elseif ($count > 3) {
                return $this->addMany($arguments);
            } else {
                return "Not enough arguments to perform addition.";
            }
        }
        return "Method $name does not exist.";
    }

    private function addTwo($a, $b)
    {
        return $a + $b;
    }

    private function addThree($a, $b, $c)
    {
        return $a + $b + $c;
    }

    private function addMany($args)
    {
        return array_sum($args);
    }
}

// Testing the class
$calc = new Calculator();

echo "Add two numbers: " . $calc->add(10, 20) . "\n";         // 30
echo "Add three numbers: " . $calc->add(5, 10, 15) . "\n";     // 30
echo "Add many numbers: " . $calc->add(1, 2, 3, 4, 5) . "\n";  // 15
echo "Add with no args: " . $calc->add() . "\n";               // Error message

?>
