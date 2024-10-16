<?php
    require_once 'app/controllers/viajes.controller.php';
    require_once 'app/controllers/vehiculos.controller.php';
    require_once 'app/controllers/usuarios.controller.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

$viajescontroller = new ViajesController();
$vehiculoscontroller = new VehiculosController();
$usuarioscontroller = new UsuariosController();

switch ($params[0]) {

    case 'home':
        $viajescontroller->LoadIndex();
        break;

    case 'vehiculos':
        $vehiculoscontroller->showFlota();
    break;

    case 'login':
        $usuarioscontroller->logIn();
    break;

    case 'autenticar':
        $usuarioscontroller->autenticar();
    break;

    case 'logOut':
        $usuarioscontroller->logOut();
        break;

    case 'nuevovehiculo':
        $vehiculoscontroller->formVehiculo();
    break;

    case 'agregarvehiculo':
        $vehiculoscontroller->agregarVehiculo();
    break;

    case 'deleteVehiculolById':
        $id_vehiculo = $params[1];
        $vehiculoscontroller->borrarVehiculo($id_vehiculo);
    break;

    case 'formEditVehiculo':
        $id_vehiculo = $params[1];
        $vehiculoscontroller->editarVehiculo($id_vehiculo);
    break;

    case 'editarVehiculo':
        $vehiculoscontroller->modificarVehiculo();
    break;

    case 'nuevoviaje':
        $viajescontroller->formViaje();
    break;

    case 'agregarviaje':
        $viajescontroller->agregarViaje();
    break;

    case 'eliminarViaje':
        $id_destino = $params[1];
        $viajescontroller->borrarDestino($id_destino);
        break;

    case 'formEditViaje':
        $id_destino = $params[1];
        $viajescontroller->editarDestino($id_destino);
        break;
    
    case 'modificarViaje':
            $viajescontroller->modificarViaje();
        break;
    
    default:
        ?><img src="img/404.jpg" alt="..."><?php
        break;
}