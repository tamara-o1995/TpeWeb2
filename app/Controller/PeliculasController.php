<?php

require_once("app/Model/PeliculasModel.php");
require_once("app/View/PeliculasView.php");
require_once("app/Model/GenerosModel.php");
require_once("app/Helper/AuthHelper.php");


class PeliculasController
{

    private $PeliculasView;
    private $PeliculasModel;
    private $GenerosModel;
    private $AuthHelper;

    function __construct()
    {
        $this->PeliculasView = new PeliculasView();
        $this->PeliculasModel = new PeliculasModel();
        $this->GenerosModel = new GenerosModel();
        $this->AuthHelper = new AuthHelper();
    }

    function showHome()
    {
        $generos = $this->GenerosModel->getGeneros();
        $peliculas = $this->PeliculasModel->getUltimasPeliculas();
        $status = $this->AuthHelper->getUserStatus();
        $this->PeliculasView->showHome($generos, $peliculas, $status);
    }

    function showPeliculas()
    {
        $peliculas = $this->PeliculasModel->getPeliculas();
        $generos = $this->GenerosModel->getGeneros();
        $status = $this->AuthHelper->getUserStatus();
        $this->PeliculasView->showPeliculas($peliculas, $generos, $status);
    }

    function showEstrenos()
    {
        $peliculas = $this->PeliculasModel->getUltimasPeliculas();
        $generos = $this->GenerosModel->getGeneros();
        $status = $this->AuthHelper->getUserStatus();
        $this->PeliculasView->showEstrenos($peliculas, $generos, $status);
    }


    function showGeneros()
    {
        $generos = $this->GenerosModel->getGeneros();
        $status = $this->AuthHelper->getUserStatus();
        $this->PeliculasView->showGeneros($generos, $status);
    }

    function insertarPelicula()
    {
        $rutaTemp = $_FILES['imagen']['tmp_name'];
        $rutaTempVideo = $_FILES['video']['tmp_name'];
        if ((isset($_POST['titulo']) && !empty($_POST['titulo']))
            && (isset($_POST['duracion']) && !empty($_POST['duracion']))
            && (isset($_POST['anio']) && !empty($_POST['anio']))
            && (isset($_POST['sinopsis']) && !empty($_POST['sinopsis']))
            && (isset($_POST['director']) && !empty($_POST['director']))
            && (isset($_POST['elenco']) && !empty($_POST['elenco']))
            && (isset($_POST['id_genero']) && !empty($_POST['id_genero']))
            && ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg"
                || $_FILES['imagen']['type'] == "image/png")
        ) {
            $img = $this->uploadImage($rutaTemp, $_FILES['imagen']['name']);
            $video = $this->uploadImage($rutaTempVideo, $_FILES['video']['name']);
            $this->PeliculasModel->insertarPelicula($_POST['titulo'], $_POST['duracion'], $_POST['anio'], $img, $_POST['sinopsis'], $video, $_POST['director'], $_POST['elenco'], $_POST['id_genero']);
        }
        $this->PeliculasView->showPeliculasLocation();
    }

    function eliminarPelicula($id_pelicula)
    {
        $this->PeliculasModel->eliminarPelicula($id_pelicula);
        $this->PeliculasView->showPeliculasLocation();
    }

    function editarPelicula($id_pelicula)
    {
        $rutaTemp = $_FILES['imagen']['tmp_name'];
        $rutaTempVideo = $_FILES['video']['tmp_name'];

        if ((isset($_POST['titulo']) && !empty($_POST['titulo']))
            && (isset($_POST['duracion']) && !empty($_POST['duracion']))
            && (isset($_POST['anio']) && !empty($_POST['anio']))
            && (isset($_POST['sinopsis']) && !empty($_POST['sinopsis']))
            && (isset($_POST['director']) && !empty($_POST['director']))
            && (isset($_POST['elenco']) && !empty($_POST['elenco']))
            && (isset($_POST['id_genero']) && !empty($_POST['id_genero']))
            && ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg"
                || $_FILES['imagen']['type'] == "image/png")
        ) {

            $img = $this->uploadImage($rutaTemp, $_FILES['imagen']['name']);
            $video = $this->uploadImage($rutaTempVideo, $_FILES['video']['name']);

            $this->PeliculasModel->editarPelicula($id_pelicula, $_POST['titulo'], $_POST['duracion'], $_POST['anio'], $img, $_POST['sinopsis'], $video, $_POST['director'], $_POST['elenco'], $_POST['id_genero']);
        }
        $this->PeliculasView->showPeliculasLocation();
    }
    function uploadImage($rutaTemp, $nombreImagen)
    {
        $filePath = "uploads/" . uniqid("", true) . "." . strtolower(pathinfo($nombreImagen, PATHINFO_EXTENSION));
        move_uploaded_file($rutaTemp, $filePath);
        return $filePath;
    }

    //ABM Genero
    function insertarGenero()
    {
        $rutaTemp = $_FILES['imagen']['tmp_name'];
        if ((isset($_POST['nombre']) && !empty($_POST['nombre']))
            && ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg"
                || $_FILES['imagen']['type'] == "image/png")
        ) {
            $img = $this->uploadImage($rutaTemp, $_FILES['imagen']['name']);
            $this->GenerosModel->insertarGenero($_POST['nombre'], $img);
        }
        $this->PeliculasView->showGenerosLocation();
    }

    function eliminarGenero($id_pelicula)
    {
        $this->GenerosModel->eliminarGenero($id_pelicula);
        $this->PeliculasView->showGenerosLocation();
    }

    function editarGenero($id_genero)
    {
        $rutaTemp = $_FILES['imagen']['tmp_name'];
        if ((isset($_POST['nombre']) && !empty($_POST['nombre']))
            && ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg"
                || $_FILES['imagen']['type'] == "image/png")
        ) {
            $img = $this->uploadImage($rutaTemp, $_FILES['imagen']['name']);
            $this->GenerosModel->editarGenero($id_genero, $_POST['nombre'], $img);
        }
        $this->PeliculasView->showGenerosLocation();
    }

    function showPeliculasPorGenero($id_genero)
    {

        $peliculas = $this->PeliculasModel->getPeliculasPorGenero($id_genero);
        $genero = $this->GenerosModel->getGenero($id_genero);
        $generos = $this->GenerosModel->getGeneros();
        $status = $this->AuthHelper->getUserStatus();
        $this->PeliculasView->showPeliculasPorGenero($peliculas, $genero, $status, $generos);
    }

    function showPelicula($id_pelicula)
    {

        $pelicula =  $this->PeliculasModel->getPelicula($id_pelicula);
        $generos = $this->GenerosModel->getGeneros();
        $status = $this->AuthHelper->getUserStatus();
        $this->PeliculasView->showPelicula($pelicula, $generos, $status);
    }
}
