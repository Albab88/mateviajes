<?php
require_once 'libs/smarty/libs/Smarty.class.php';
require_once 'app/controllers/usuarios.controller.php';

class VehiculosView {

        private $smarty;
    
    public function __construct(){
        $this->smarty = new Smarty\Smarty();
        $this->smarty->assign('base', BASE_URL);
    }
    public function showVehiculos($vehiculos) {
        $this->smarty->assign('vehiculos', $vehiculos);
       
        $this->smarty->display('flota.tpl');
    }

}