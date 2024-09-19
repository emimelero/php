<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprueba Hora</title>
</head>
<body>
    <?php
        function comprobarHora($hora){
            $tiempo = explode(":", $hora);
            list($hora, $minuto, $segundo) = $tiempo;
            if(count($tiempo) != 3){
                echo "Este formato de hora no es válido";
            }else if($hora >= 24 || $hora < 0){
                echo "La hora no es válida";
            }else if($minuto >= 60 || $minuto < 0){
                echo "Los minutos no son válidos";
            }else if($segundo >= 60 || $segundos<0 ){
                echo "Los segundos no son válido";
            }else{
                echo "La hora $hora sí es válida";
            }
        }
        comprobarHora("14:31:12");

    ?>
</body>
</html>