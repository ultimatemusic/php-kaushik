<?php
// User Controller
require_once ('model/User.php');
require_once ('view/UserView.php');

class UserController {
    private $model;
    private $view;

    public function __construct($name, $email) {
        $this->model = new User($name, $email);
        $this->view = new UserView();
    }

    public function showUser() {
        $this->view->displayUser($this->model);
    }
}
