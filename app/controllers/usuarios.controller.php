<?php

require_once 'app/models/usuarios.model.php';
require_once 'app/views/usuarios.view.php';

class UsuariosController {

    private $model;
    private $view;

    public function __construct(){
        $this->model = new UsuariosModel();
        $this->view = new UsuariosView();
    }

    public function logIn () {
        $this->view->showLogin();
    }

}