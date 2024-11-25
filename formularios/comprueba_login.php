<?php
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
            $estaBien=true;
            return include "ok.php";
        }
    }
    if($estaBien===false){
        include "ko.php";
    }
    
?>