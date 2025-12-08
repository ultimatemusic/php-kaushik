<!-- Explain the role of a destructor in PHP and when it is called. -->


<!-- What is a Destructor in PHP?
A destructor is a special method in PHP that is automatically called when an object is 
destroyed or goes out of scope. -->


 <!-- Syntax of Destructor -->


<?php
 public function __destruct() {
}
?>

 <!-- Example of Destructor in PHP -->

 <?php

class FileHandler {
    private $file;

    // Constructor: Open a file
    public function __construct($filename) {
        $this->file = fopen($filename, "w");
        echo "File opened.\n";
    }

    // Destructor: Close the file
    public function __destruct() {
        fclose($this->file);
        echo "File closed.\n";
    }

    public function write($text) {
        fwrite($this->file, $text);
    }
}

// Create object
$fh = new FileHandler("demo.txt");
$fh->write("sanket, devganiya!");

// Object destroyed at the end of the script, destructor will be called

?>
