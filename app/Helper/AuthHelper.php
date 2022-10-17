<?php
require_once("app/Model/UserModel.php");

class AuthHelper{

    private $model;

    function __construct()
    {
        $this->model = new UserModel(); 
    }

    function checkLoggedIn(){
        session_start();
        if (!isset($_SESSION["USER_EMAIL"])) {
            header("Location: ".BASE_URL."login");
        }
    }

    function logout()
    {
        session_start();
        session_destroy();
    }

    function getUserStatus(){
        if (!isset($_SESSION)){
            session_start();
        }
        $userStatus = false;
        if(isset($_SESSION['USER_EMAIL'])){
            $user = $this->model->getUserByEmail($_SESSION['USER_EMAIL']);
            if ($user && $user->admin == 1){
                $userStatus = true;
            }
        }
        return $userStatus;
    }

}