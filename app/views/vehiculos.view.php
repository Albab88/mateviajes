<?php

require_once 'libs/smarty/libs/Smarty.class.php';

class VehiculosView {

    private $smarty;
    
    public function __construct() {
        $this->smarty = new Smarty\Smarty();
        $this->smarty->assign('base', BASE_URL);
    }

    public function showVehiculos($vehiculos, $userLogged) {
        $this->smarty->assign('vehiculos', $vehiculos);
        $this->smarty->assign('userLogged', $userLogged);
        $this->smarty->display('flota.tpl');
    }

    public function showFormVehiculo($userLogged) {
        $this->smarty->assign('userLogged', $userLogged);
        $this->smarty->display('formVehiculo.tpl');
    }

    public function formEdicionVehiculo($vehiculo, $userLogged) {
        $this->smarty->assign('userLogged', $userLogged);
        $this->smarty->assign('vehiculo', $vehiculo);
        $this->smarty->display('formEditVehiculo.tpl');
    }
}