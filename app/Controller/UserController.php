<?php

require_once("app/View/UserView.php");
require_once("app/Model/UserModel.php");

class UserController
{

    private $model;
    private $view;

    function __construct()
    {
        $this->model = new UserModel();
        $this->view = new UserView();
    }

    function logout()
    {
        session_start();
        session_destroy();
        $this->view->showHomeLocation(false);
    }

    function showLogin()
    {
        $this->view->showLogin();
    }

    function showRegistro()
    {
        $this->view->showRegistro();
    }

    function verifyUser()
    {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            // toma los datos del form
            $email = $_POST['email'];
            $password = $_POST['password'];
        }

        // busco el usuario por email
        $user = $this->model->getUserByEmail($email);

        // verifico que el usuario existe y que las contraseñas son iguales
        if ($user && password_verify($password, $user->pass)) {

            // inicio una session para este usuario
            session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;

            $this->view->showHomeLocation();
        } else {
            // si los datos son incorrectos muestro el form con un erro
            $this->view->showLogin("El usuario o la contraseña no existe.");
        }
    }

    function insertUser()
    {

        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            // toma los datos del form
            $email = $_POST['email'];
            $user = $this->model->getUserByEmail($email);

            if (!($user)) {
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $admin = 0;
                $this->model->insertUser($email, $password, $admin);
                $this->verifyUser();
            } else {
                $this->view->showRegistro("Ya existe el usuario.");
            }
        } else {
            $this->view->showRegistro("Complete todos los campos");
        }
    }
}
