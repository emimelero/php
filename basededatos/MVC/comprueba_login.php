<?php
    session_start();
    $nombre = $_POST["nombre"];
    $password = $_POST["password"];
    $usuarios = [
        array("nombre" => "Ivan",
            "password" => "1234"),
        array("nombre" => "Emilio",
            "password" => "1234"),
        array("nombre" => "Jose",
            "password" => "1234")];
    $estaBien = false;
    foreach($usuarios as $usu){
        if($usu["nombre"] === $nombre && $usu["password"] === $password){
            $_SESSION['nombre']=$usu['nombre'];
            $estaBien=true;
            return include "crud_inicio.php";
        }
    }
    if($estaBien===false){
        include "ko.php";
    }
    
?>