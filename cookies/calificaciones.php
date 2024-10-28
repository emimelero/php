<?php
    
    session_start();

    $_SESSION['listaAlumn'];
    
    if(isset($_SESSION['listaAlumn'])){
        $listaAlumn = $_SESSION['listaAlumn'];
    }
    else{
        $listaAlumn = [];
    }

    if(isset($_REQUEST['añadir'])){
        $nombre = $_POST['nombre'];
        $not1 = $_POST['nota1'];
        $not2 = $_POST['nota2'];
        $not3 = $_POST['nota3'];
        $media = round(($not1 + $not2 + $not3)/3,1);
        $arrayAlumn = array(
            'nombre' => $nombre,
            'nota1' => $not1,
            'nota2' => $not2,
            'nota3' => $not3,
            'media' => $media
            
        );
        $listaAlumn[] = $arrayAlumn;
        $_SESSION['listaAlumn'] = $listaAlumn;
    }


    //Borrar lista
    if (isset($_GET['borrar']) && $_GET['borrar'] == 'true') {
        unset($_SESSION['listaAlumn']);  
        session_destroy();
    }

    include('calificaciones.view.php')

?>