<?php
// Simple MVC Example: User Module
require_once __DIR__ . '/controller/UserController.php';

// Example data
$name = "John Doe";
$email = "john.doe@example.com";

$controller = new UserController($name, $email);
$controller->showUser();
