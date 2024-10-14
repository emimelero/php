<?php
    function hont($partidos,$escanos,$votos){
        $num_votos = [];
        $cont_votos = [];
        $cont = [];
        for($i = 1; $i <= $escanos; $i++){
        }
        for($i = 0;$i < count($votos); $i++){
            for($j = 1; $j <= $escanos;$j++){
                $new_num = round($votos[$i]/$j,1);
                $num_votos[] = $new_num;
                $cont[] = $new_num;
                
            }
            $cont_votos[] = $num_votos;
            $num_votos = [];
            

        }
        $votos_fin = array_combine($partidos,$cont_votos);

        rsort($cont);
        $numeros_may = array_slice($cont,0,$escanos);

        include("hont.view.php");

        
    }



    $votos = [500000,300000,150000,50000];
    $escanos = 7;
    $partidos = ["partido a","partido b","partido c","partido d"];
    echo hont($partidos,$escanos,$votos);

?>