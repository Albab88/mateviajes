<?php

require_once 'app/models/viajes.model.php';
require_once 'app/models/vehiculos.model.php';
require_once 'app/views/viajes.view.php';
require_once 'app/controllers/usuarios.controller.php';
// requiero el modelo y la vista para que funcionen junto con el controlador

class ViajesController {
    private $modelViajes;
    private $modelVehiculos;
    private $view;

    public function __construct() {
        $this->modelVehiculos = new VehiculosModel();
        $this->modelViajes = new ViajesModel();
        $this->view = new ViajesView();
        $this->usercontroller= new UsuariosController();
    }
    public function LoadIndex(){
        $destinos= $this->modelViajes->getDestinos();
        $userLogged= $this->usercontroller->checkLogged();
        $this->view->showHome($destinos, $userLogged);
    }
}