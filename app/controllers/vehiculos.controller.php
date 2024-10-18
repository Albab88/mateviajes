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

    public function showFlota() {
        $vehiculos = $this->model->getVehiculos();
        $userLogged = $this->usercontroller->checkLogged();
        $this->view->showVehiculos($vehiculos,$userLogged);
    }

    public function formVehiculo() {
        $userLogged = $this->usercontroller->checkLogged();
        $this->view->showFormVehiculo($userLogged);
    }

    public function agregarVehiculo() {
        if($this->usercontroller->checkLogged()) {
            $marca = $_REQUEST['marca'];
            $modelo = $_REQUEST['modelo'];
            $anio = $_REQUEST['anio'];
            $patente = $_REQUEST['patente'];
            $asientos = $_REQUEST['asientos'];
            $this->model->crearvehiculo($marca, $modelo, $anio, $patente, $asientos);
            header('Location: ' . BASE_URL . 'vehiculos');
        } else {
            header('Location: ' . BASE_URL . 'login');
        }
    }

    public function borrarVehiculo($id_vehiculo) {
        if($this->usercontroller->checkLogged()) {
            $this->model->borrarVehiculoById($id_vehiculo);
            header("Location: " . BASE_URL . 'vehiculos');
        } else {
            header('Location: ' . BASE_URL . 'login');
        }
    }

    public function editarVehiculo($id_vehiculo) {
        $userLogged = $this->usercontroller->checkLogged();
        $vehiculo = $this->model->getVehiculoById($id_vehiculo);
        $this->view->formEdicionVehiculo($vehiculo,$userLogged);
    }

    public function modificarVehiculo() {
        if($this->usercontroller->checkLogged()) {
            $id = $_REQUEST['id'];
            $marca = $_REQUEST['marca'];
            $modelo = $_REQUEST['modelo'];
            $anio = $_REQUEST['anio'];
            $patente = $_REQUEST['patente'];
            $asientos = $_REQUEST['asientos'];
            $this->model->updateVehiculo($marca, $modelo, $anio, $patente, $asientos, $id);
            header('Location: ' . BASE_URL . 'vehiculos');
        } else {
            header('Location: ' . BASE_URL . 'vehiculos');
        }
    }
}