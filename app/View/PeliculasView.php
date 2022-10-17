<?php

require_once('libs/smarty/libs/Smarty.class.php');

class PeliculasView
{

    private $title;
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
        $this->title  = "Sala 1";
    }

    function showhome($generos, $peliculas, $status)
    {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('generos', $generos, false);
        $this->smarty->assign('peliculas', $peliculas, false);
        $this->smarty->assign('status', $status, false);
        $this->smarty->display('templates/home.tpl');
    }

    function showPeliculas($peliculas, $generos, $status)
    {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('peliculas', $peliculas, false);
        $this->smarty->assign('generos', $generos, false);
        $this->smarty->assign('status', $status, false);
        $this->smarty->display('templates/peliculas.tpl');
    }

    function showEstrenos($peliculas, $generos, $status)
    {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('peliculas', $peliculas, false);
        $this->smarty->assign('generos', $generos, false);
        $this->smarty->assign('status', $status, false);
        $this->smarty->display('templates/estrenos.tpl');
    }

    function showGeneros($generos, $status)
    {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('generos', $generos, false);
        $this->smarty->assign('status', $status, false);
        $this->smarty->display('templates/generos.tpl');
    }

    function showPeliculasPorGenero($peliculas, $genero, $status, $generos)
    {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('peliculas', $peliculas, false);
        $this->smarty->assign('genero', $genero, false);
        $this->smarty->assign('status', $status, false);
        $this->smarty->assign('generos', $generos, false);
        $this->smarty->display('templates/genero.tpl');
    }

    function showPelicula($pelicula, $generos, $status)
    {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('pelicula', $pelicula, false);
        $this->smarty->assign('generos', $generos, false);
        $this->smarty->assign('status', $status, false);
        $this->smarty->display('templates/pelicula.tpl');
    }

    function showHomeLocation()
    {
        header("Location: " . BASE_URL . "Home");
    }

    function showPeliculasLocation()
    {
        header("Location: " . BASE_URL . "peliculas");
    }

    function showGenerosLocation()
    {
        header("Location: " . BASE_URL . "generos");
    }

    function showLoginLocation()
    {
        header("Location: " . BASE_URL . "login");
    }
}
