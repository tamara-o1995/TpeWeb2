<?php

require_once('libs/smarty/libs/Smarty.class.php');

class UserView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showLogin($error = "")
    {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('titulo', 'Login');
        $this->smarty->assign('error', $error);
        $this->smarty->assign('status', false);
        $this->smarty->display('templates/login.tpl');
    }

    function showRegistro($error = "")
    {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('titulo', 'Registro');
        $this->smarty->assign('status', false);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/registro.tpl');
    }

    function showHomeLocation()
    {
        header("Location: " . BASE_URL . "Home");
    }
}
