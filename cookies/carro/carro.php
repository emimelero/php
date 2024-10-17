<?php


    $articulos = array(
        array("id" => 1, "nombre" => "Zapatillas Nike", "precio" => 60),
        array("id" => 2, "nombre" => "Sudadera Domyos", "precio" => 15),
        array("id" => 3, "nombre" => "Pala de pádel Vairo", "precio" => 50),
        array("id" => 4, "nombre" => "Pelota de baloncesto Molten", "precio"
        => 20)
    );

    $preciototal = 0;

    echo "<h2>Lista de articulos:</h2>";

    echo "<a id='1' href='#' style='text-decoration:none;'>Zapatillas Nike</a><br>
          <a id='2' href='#' style='text-decoration:none;'>Sudadera Domyos</a><br>
          <a id='3' href='#' style='text-decoration:none;'>Pala de pádel Vairo</a><br>
          <a id='4' href='#' style='text-decoration:none;'>Pelota de baloncesto Molten</a><br><br>";

    echo "Precio total: " . $preciototal;
?>