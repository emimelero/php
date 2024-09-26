<?php

$plantilla = fopen("plantillas.csv","r");
    $lista = [];
    $linea = [];
    $nueva_lista = [];

    while(!feof($plantilla)){
        $linea = explode(",",fgets($plantilla));
        $lista[] = $linea;
    }

    


    $header = array_shift($lista);

    foreach($lista as $fila){
        $l = array_combine($header, $fila);
        $nueva_lista[] = $l;
    }

    // $atleticoJugadores = array_filter($nueva_lista, function($jugador)){
    //     return $jugador['Equipo'] === "Atlético de Madrid";
    // };

    $atleticOrden[]=usort($nueva_lista, function($a,$b){
        return $a['Dorsal'] <=> $b['Dorsal'];
    });

    
    fclose($plantilla);

    include('plantillas.view.php')

























    // print_r($nueva_lista);
    // if ($nueva_lista["Equipo"] === "Atlético de Madrid"){
    //     foreach($lista as $linea){
    //         echo $linea["Dorsal"],$linea["Nombre"];
    //     }
    // }
    // foreach ($lista as $fila){
    //     echo $fila[5];
    //     echo "<br>";
    // }
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