<?php
require_once __DIR__ . '/../model/User.php';
class UserController {
    private $userModel;
    public function __construct($pdo) {
        $this->userModel = new User($pdo);
    }
    public function index() {
        $users = $this->userModel->getAll();
        include __DIR__ . '/../view/list.php';
    }
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $this->userModel->create($name, $email);
            header('Location: index.php');
            exit;
        }
        include __DIR__ . '/../view/create.php';
    }
    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $this->userModel->update($id, $name, $email);
            header('Location: index.php');
            exit;
        }
        $user = $this->userModel->get($id);
        include __DIR__ . '/../view/edit.php';
    }
    public function delete($id) {
        $this->userModel->delete($id);
        header('Location: index.php');
        exit;
    }
}
