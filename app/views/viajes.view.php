<?php
require_once 'libs/smarty/libs/Smarty.class.php';

class ViajesView {

        private $smarty;
    
    public function __construct(){
        $this->smarty = new Smarty\Smarty();
        $this->smarty->assign('base', BASE_URL);
    }
    public function showHome($destinos,$userLogged) {
        $this->smarty->assign('userLogged', $userLogged);
        $this->smarty->assign('destinos', $destinos);
        $this->smarty->display('home.tpl');
    }

    public function showFormViaje($vehiculos, $userLogged){
        $this->smarty->assign('userLogged', $userLogged);
        $this->smarty->assign('vehiculos', $vehiculos);
        $this->smarty->display('formViajes.tpl');
    }
}