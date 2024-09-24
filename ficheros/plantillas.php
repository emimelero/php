<?php

$plantilla = fopen("plantillas.csv","r");
    $lista = [];
    $linea = [];

    while(!feof($plantilla)){
        $linea = explode(",",fgets($plantilla));
        $lista[] = $linea;
    }

    fclose($plantilla);


    $header = array_shift($lista);
    array_combine($header, $lista);






    foreach ($lista as $fila){
        echo $fila[5];
        echo "<br>";
    }














    // echo "<table border='1'>";
    //     echo "<br>";        
        
    //     for($i = 0;$i < count($lista);$i++){
    //         echo "<tr>";
    //         for($c = 0;$c < count($linea);$c++){
    //             echo "<td>{$lista[$i][$c]}</td>";
    //         }
    //         echo "</tr>";
    //     }
        
    
    // echo "</table>";
?>