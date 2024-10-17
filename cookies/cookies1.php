<?php
    if(isset($_COOKIE['user'])){
        echo "Bienvenido, " . $_COOKIE['user'];
    }else{
        $nombre = "Emilio Melero";
        setcookie('user',$nombre,time()+15);
        echo "COOKIE CONSEGUIDA";
    }
?>