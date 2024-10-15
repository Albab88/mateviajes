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
    
    default:
        
        ?><img src="img/404.jpg" alt="..."><?php
        break;
}