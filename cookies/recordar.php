<?php
    $rec = $_POST['rec'];


    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];

    if(isset($rec)){
        setcookie('nombre',$nombre,time()+100);
        setcookie('contrasena',$contrasena,time()+100);
    }

    echo "Bienvenido " . $nombre;
?>