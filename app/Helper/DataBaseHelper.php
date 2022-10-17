<?php
class DataBaseHelper
{

    static function connection()
    {
        return new PDO('mysql:host=localhost;' . 'dbname=db_cine;charset=utf8', 'root', '');
    }
}
