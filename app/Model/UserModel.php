<?php

require_once("app/Helper/DataBaseHelper.php");

class UserModel
{

    private $db;

    function __construct()
    {
        $this->db = DataBaseHelper::connection();
    }

    public function getUserByEmail($email)
    {
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE email = ?");
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function insertUser($email, $password, $admin)
    {
        $query = $this->db->prepare("INSERT INTO usuarios(email,pass,admin) VALUES(?,?,?)");
        $query->execute(array($email, $password, $admin));
    }
}
