<?php

class Database{
    // conexion local
    public static function connect(){
    $db=new mysqly('localhost','root','','TIENDA');
    $db->query("SET NAMES 'utf8'");
    return $db;
}
}