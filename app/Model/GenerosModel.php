<?php

require_once("app/Helper/DataBaseHelper.php");

class GenerosModel
{

    private $db;

    function __construct()
    {
        $this->db = DataBaseHelper::connection();
    }

    function getGeneros()
    {
        $query = $this->db->prepare("SELECT * FROM generos");
        $query->execute();
        return  $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getGenero($id)
    {
        $query = $this->db->prepare("SELECT * FROM generos WHERE id=?");
        $query->execute(array($id));
        return  $query->fetchAll(PDO::FETCH_OBJ);
    }


    function insertarGenero($nombre, $imagen)
    {
        $query = $this->db->prepare("INSERT INTO generos(nombre, imagen) VALUES(?,?)");
        $query->execute(array($nombre, $imagen));
    }

    function eliminarGenero($id_genero)
    {
        $query = $this->db->prepare("DELETE FROM generos WHERE id=?");
        $query->execute(array($id_genero));
    }

    function editarGenero($id_genero, $nombre, $imagen)
    {
        $query = $this->db->prepare("UPDATE generos SET nombre=?,imagen=? WHERE id=?");
        $query->execute(array($nombre, $imagen, $id_genero));
    }
}
