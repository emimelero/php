<?php
    function hont($partidos,$escanos,$votos){
        $num_votos = [];
        $cont_votos = [];
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td></td>";
        for($i = 1; $i <= $escanos; $i++){
            echo "<td>Escaño $i</td>";
        }
        echo "</tr>";
        for($i = 0;$i < count($votos); $i++){
            echo "<tr>";
            echo "<td>{$partidos[$i]}</td>";
            for($j = 1; $j <= $escanos;$j++){
                $new_num = round($votos[$i]/$j,1);
                echo "<td>{$new_num}</td>";
                $num_votos[] = $new_num;
                
            }
            $cont_votos[] = $num_votos;
            $num_votos = [];
            
            echo "</tr>";
        }
        echo "</table>";
        $votos_fin = array_combine($partidos,$cont_votos);
        print_r($votos_fin);
    }



    $votos = [500000,300000,150000,50000];
    $escanos = 7;
    $partidos = ["partido a","partido b","partido c","partido d"];
    echo hont($partidos,$escanos,$votos);

?>