<?php

class Conexion{
    static public function conectar(){
        $link = new PDO('mysql:host=localhost; port=3306; dbname=curso_php', 'root', '');
        $link -> exec("set names utf8");
        return $link;
    }
}