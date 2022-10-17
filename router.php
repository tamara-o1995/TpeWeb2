<?php
define("BASE_URL", '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

require_once('app/Controller/PeliculasController.php');
require_once('app/Controller/UserController.php');
require_once('RouterClass.php');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "home";
}

$params = explode('/', $action);

$peliculasController = new PeliculasController();
$userController = new UserController();

switch ($params[0]) {
    case 'home':

        $peliculasController->showHome();
        break;
    case 'peliculas':

        $peliculasController->showPeliculas();
        break;

    case 'insertarPelicula':

        $peliculasController->insertarPelicula();
        break;
    case 'eliminarPelicula':
        $id = $params[1];
        $peliculasController->eliminarPelicula($id);
        break;
    case 'editarPelicula':
        $id = $params[1];
        $peliculasController->editarPelicula($id);
        break;
    case 'pelicula':
        $id = $params[1];
        $peliculasController->showPelicula($id);
        break;
    case 'estrenos':

        $peliculasController->showEstrenos();
        break;
    case 'generos':

        $peliculasController->showGeneros();
        break;
    case 'insertarGenero':

        $peliculasController->insertarGenero();
        break;
    case 'eliminarGenero':
        $id = $params[1];
        $peliculasController->eliminarGenero($id);
        break;
    case 'editarGenero':
        $id = $params[1];
        $peliculasController->editarGenero($id);
        break;
    case 'genero':
        $id = $params[1];
        $peliculasController->showPeliculasPorGenero($id);
        break;
    case 'login':

        $userController->showlogin();
        break;
    case 'logout':

        $userController->logout();
        break;
    case 'verify':

        $userController->verifyUser();
        break;
    case 'registro':

        $userController->showRegistro();
        break;
    case 'insertUser':

        $userController->insertUser();
        break;
    default:
    $peliculasController->showHome();
        break;
}
