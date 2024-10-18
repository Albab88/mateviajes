<?php

require_once 'app/models/usuarios.model.php';
require_once 'app/views/usuarios.view.php';

class UsuariosController {

    private $model;
    private $view;

    public function __construct() {
        $this->model = new UsuariosModel();
        $this->view = new UsuariosView();
    }

    public function logIn () {
        $this->view->showLogin();
    }

    public function autenticar () {
        $user = $_POST['usuario'];
        $password = $_POST['password'];
        $userDB = $this->model->getUsuario($user);
        if($userDB && password_verify($password,($userDB->password))) {
            session_start();
            $_SESSION["logueado"] = true;
            $_SESSION["userLogged"] = $user;
            header ('Location:'.'home');
        } else {
            $this->view->showLogin("El usuario o la contraseña no existe.");
        }
    }

    public function checkLogged() {
        session_start();
        if (isset($_SESSION["logueado"])) {
            return true;
        } else {
            return false;
        }
    }

    public function logOut () {
        session_start();
        session_destroy();
        header('Location: '.'home');
    }
}