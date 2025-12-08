Write a script to establish a database connection and handle any errors during the
connection process.
<?php
$servername = "localhost";
$username = "username"; // replace with your MySQL username
$password = "password"; // replace with your MySQL password
$database = "database"; // replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";


?>
