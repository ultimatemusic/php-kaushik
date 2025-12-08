<!-- Explain the scope resolution operator (::) and its use in PHP. -->



 <!-- Example: Static Property & Method Access -->


 <?php

class Math {
    public static $pi = 3.14;

    public static function square($n) {
        return $n * $n;
    }
}

echo Math::$pi . "\n";               // Accessing static property
echo Math::square(5) . "\n";         // Calling static method

?>
