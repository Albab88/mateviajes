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

    public function formViaje(){
        $userLogged = $this->usercontroller->checkLogged();
        $vehiculos= $this->modelVehiculos->getVehiculos();
        $this->view->showFormViaje($vehiculos, $userLogged);
    }

    public function agregarViaje(){
        //Obtener todos los datos del formulario
        if ($this->usercontroller->checkLogged()) {
            $destino = $_REQUEST['destino'];
            $fecha = $_REQUEST['fecha'];
            $horario = $_REQUEST['horario'];
            $pasajeros = $_REQUEST['lugares'];
            $vehiculo = $_REQUEST['vehiculo'];
            $info = $_REQUEST['datos'];
            //Pasarle al model todos los datos
            $this->modelViajes->crearviaje($destino, $fecha, $horario, $pasajeros, $vehiculo, $info);

            //Redirección
            header('Location: ' . BASE_URL . 'home');
        } else {
            header('Location: ' . BASE_URL . 'login');
        }
    }
}