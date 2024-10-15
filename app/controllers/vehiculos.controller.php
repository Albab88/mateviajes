<?php

require_once 'app/models/vehiculos.model.php';
require_once 'app/views/vehiculos.view.php';
require_once 'app/controllers/usuarios.controller.php';

class VehiculosController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new VehiculosModel();
        $this->view = new VehiculosView();
        $this->usercontroller = new UsuariosController();

    }
    public function showFlota(){
        $vehiculos= $this->model->getVehiculos();
        $userLogged= $this->usercontroller->checkLogged();
        $this->view->showVehiculos($vehiculos,$userLogged);
    }

}