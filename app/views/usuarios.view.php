<?php

require_once 'libs/smarty/libs/Smarty.class.php';

class UsuariosView {

    private $smarty;
    
    public function __construct() {
        $this->smarty = new Smarty\Smarty();
        $this->smarty->assign('base', BASE_URL);
    }
    
    public function showLogIn($error = null) {
        $this->smarty->assign("error", $error);
        $this->smarty->display('formLogin.tpl');
    }
}
