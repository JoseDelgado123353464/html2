<?php

class Database{
    // conexion local
    $db=new mysqly('localhost','root','','TIENDA');
    $db->query("SET NAMES 'utf8'");
    return $db;
}