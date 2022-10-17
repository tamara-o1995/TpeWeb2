<?php

require_once("app/Helper/DataBaseHelper.php");

class PeliculasModel
{

    private $db;

    function __construct()
    {
        $this->db = DataBaseHelper::connection();
    }

    function getPeliculas()
    {
        $query = $this->db->prepare("SELECT * FROM peliculas");
        $query->execute();
        return  $query->fetchAll(PDO::FETCH_OBJ);
    }

    function insertarPelicula($titulo, $duracion, $anio, $imagen, $sinopsis, $video, $director, $elenco, $id_genero)
    {
        $query = $this->db->prepare("INSERT INTO peliculas(titulo, duracion,anio,imagen,sinopsis,video,director,elenco,id_genero) VALUES(?,?,?,?,?,?,?,?,?)");
        $query->execute(array($titulo, $duracion, $anio, $imagen, $sinopsis, $video, $director, $elenco, $id_genero));
    }

    function eliminarPelicula($id_pelicula)
    {
        $query = $this->db->prepare("DELETE FROM peliculas WHERE id=?");
        $query->execute(array($id_pelicula));
    }

    function editarPelicula($id_pelicula, $titulo, $duracion, $anio, $imagen, $sinopsis, $video, $director, $elenco, $id_genero)
    {
        $query = $this->db->prepare("UPDATE peliculas SET titulo=?,duracion=?,anio=?,imagen=?,sinopsis=?,video=?,director=?,elenco=?,id_genero=? WHERE id=?");
        $query->execute(array($titulo, $duracion, $anio, $imagen, $sinopsis, $video, $director, $elenco, $id_genero, $id_pelicula));
    }

    function getPeliculasPorGenero($id_genero)
    {
        $query = $this->db->prepare("SELECT peliculas.*, generos.nombre FROM peliculas INNER JOIN generos ON generos.id = peliculas.id_genero WHERE id_genero=?");
        $query->execute(array($id_genero));
        return  $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getPelicula($id_pelicula)
    {
        $query = $this->db->prepare("SELECT  peliculas.*, generos.nombre  FROM peliculas,generos WHERE  peliculas.id =? AND peliculas.id_genero = generos.id");
        $query->execute(array($id_pelicula));
        return  $query->fetch(PDO::FETCH_OBJ);
    }

    function getUltimasPeliculas()
    {
        $query = $this->db->prepare("SELECT * FROM peliculas ORDER BY anio DESC LIMIT 12");
        $query->execute();
        return  $query->fetchAll(PDO::FETCH_OBJ);
    }
}
