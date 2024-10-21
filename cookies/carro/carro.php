<?php


    $articulos = array(
        array("id" => 1, "nombre" => "Zapatillas Nike", "precio" => 60),
        array("id" => 2, "nombre" => "Sudadera Domyos", "precio" => 15),
        array("id" => 3, "nombre" => "Pala de pádel Vairo", "precio" => 50),
        array("id" => 4, "nombre" => "Pelota de baloncesto Molten", "precio"
        => 20)
    );

    session_start();

    

    if(isset($_GET["id"])){
        $id_art = $_GET["id"];
        foreach($articulos as $articulo){
            if($articulo['id']==$id_art){
                $_SESSION['Carro'][] = $articulo;
                break;
            }
        }
    }
    $preciototal = 0;

    if(isset($_SESSION['Carro'])){
        foreach($_SESSION['Carro'] as $precioart){
            $preciototal += $precioart['precio'];
        }
    }

    if (isset($_GET['limpiar']) && $_GET['limpiar'] == 'true'){
        unset($_SESSION['Carro']);
        $preciototal = 0;
    }


?>