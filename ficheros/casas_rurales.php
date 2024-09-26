<?php

        $plantilla = fopen("casas_rurales.csv","r");
        $lista = [];
        $linea = [];
        $nueva_lista = [];

        while(!feof($plantilla)){
            $linea = explode(";",fgets($plantilla));
            $lista[] = $linea;
        }

        $header = array_shift($lista);

        foreach($lista as $fila){
            $l = array_combine($header, $fila);
            $nueva_lista[] = $l;
        }

        
        fclose($plantilla);
        include('casas_rurales.view.php')

?>