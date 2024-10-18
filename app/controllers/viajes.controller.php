<?php

require_once 'app/models/viajes.model.php';
require_once 'app/models/vehiculos.model.php';
require_once 'app/views/viajes.view.php';
require_once 'app/controllers/usuarios.controller.php';

class ViajesController {
    private $modelVehiculos;
    private $modelViajes;
    private $view;

    public function __construct() {
        $this->modelVehiculos = new VehiculosModel();
        $this->modelViajes = new ViajesModel();
        $this->view = new ViajesView();
        $this->usercontroller = new UsuariosController();
    }

    public function LoadIndex() {
        $destinos = $this->modelViajes->getDestinos();
        $userLogged = $this->usercontroller->checkLogged();
        $this->view->showHome($destinos, $userLogged);
    }
    
    public function formViaje() {
        $userLogged = $this->usercontroller->checkLogged();
        $vehiculos = $this->modelVehiculos->getVehiculos();
        $this->view->showFormViaje($vehiculos, $userLogged);
    }

    public function agregarViaje() {
        if ($this->usercontroller->checkLogged()) {
            $destino = $_REQUEST['destino'];
            $fecha = $_REQUEST['fecha'];
            $horario = $_REQUEST['horario'];
            $pasajeros = $_REQUEST['lugares'];
            $vehiculo = $_REQUEST['vehiculo'];
            $info = $_REQUEST['datos'];
            $this->modelViajes->crearviaje($destino, $fecha, $horario, $pasajeros, $vehiculo, $info);
            header('Location: ' . BASE_URL . 'home');
        } else {
            header('Location: ' . BASE_URL . 'login');
        }
    }

    function borrarDestino($id_destino) {
        if($this->usercontroller->checkLogged()){
            $this->modelViajes->deleteDestinoById($id_destino);
            header("Location: " . BASE_URL . 'home');
        } else {
            header("Location: " . BASE_URL . 'login');
        }
    }

    public function editarDestino($id_destino) {
        $userLogged = $this->usercontroller->checkLogged();
        $viaje = $this->modelViajes->getViajeById($id_destino);
        $vehiculos = $this->modelVehiculos->getVehiculos();
        $vehiculo = $this->modelVehiculos->getVehiculoById($viaje->fk_vehiculo);
        $this->view->formEdicionViaje($viaje,$vehiculo, $vehiculos, $userLogged);
    }

    public function modificarViaje() {
        if ($this->usercontroller->checkLogged()) {
            $id = $_REQUEST['id'];
            $destino = $_REQUEST['destino'];
            $fecha = $_REQUEST['fecha'];
            $horario = $_REQUEST['horario'];
            $pasajeros = $_REQUEST['lugares'];
            $vehiculo = $_REQUEST['vehiculo'];
            $this->modelViajes->updateViaje($destino, $fecha, $horario, $pasajeros, $vehiculo, $info, $id);
            header('Location: ' . BASE_URL . 'home');
        } else {
            header('Location: ' . BASE_URL . 'login');
        }
    }
}