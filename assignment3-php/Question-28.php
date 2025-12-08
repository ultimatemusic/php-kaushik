<!-- Create a class marked as final and attempt to extend it to show the restriction -->

<!-- Example: final Class Restriction  -->



<?php

// Final class definition
final class Database {
    public function connect() {
        echo "Connected to the database.\n";
    }
}

// Attempting to extend the final class
class MySQLDatabase extends Database {
    public function connect() {
        echo "Connected to MySQL database.\n";
    }
}

// Create object
$db = new MySQLDatabase();
$db->connect();

?>

<?php


?>


<!-- Correct Use (No Inheritance): -->



<?php

final class Database {
    public function connect() {
        echo "Connected to the database.\n";
    }
}

$db = new Database();
$db->connect(); // Works fine

?>

