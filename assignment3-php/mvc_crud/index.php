<?php
// Database connection
$dsn = 'mysql:host=localhost;dbname=assignment_db'; // Change db name as needed
$username = 'root'; // Change as needed
$password = '';
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}
require_once __DIR__ . '/controller/UserController.php';
$controller = new UserController($pdo);
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? intval($_GET['id']) : null;
switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'edit':
        if ($id) {
            $controller->edit($id);
        }
        break;
    case 'delete':
        if ($id) {
            $controller->delete($id);
        }
        break;
    default:
        $controller->index();
}
