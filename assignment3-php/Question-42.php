
Implement try-catch blocks in a PHP script to handle exceptions for database connection and
query execution.
<?php
// Using PDO with try-catch for error handling
$dsn = 'mysql:host=localhost;dbname=database';
$username = 'username'; // replace with your MySQL username
$password = 'password'; // replace with your MySQL password

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connection successful!<br>";

    // Example query execution
    $sql = "SELECT * FROM users";
    $stmt = $pdo->query($sql);
    foreach ($stmt as $row) {
        echo $row['username'] . '<br>';
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
