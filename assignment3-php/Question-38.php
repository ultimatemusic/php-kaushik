<!--
How to Connect PHP to a MySQL Database Using mysqli or PDO:

1. Using mysqli:
php
$conn = new mysqli('localhost', 'username', 'password', 'database');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
echo 'Connected successfully with mysqli!';
$conn->close();

Note: Replace 'localhost', 'username', 'password', and 'database' with your actual database credentials.
-->