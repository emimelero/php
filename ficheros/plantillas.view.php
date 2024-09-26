<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<table border='1'>";
            foreach($nueva_lista as $l){
                if ($l["Equipo"] == "Atlético de Madrid"){
                        echo "<tr>";
                        echo "<td>{$l["Dorsal"]}</td> <td>{$l["Nombre"]}</td> <td>{$l["Apellidos"]}</td> <td>{$l["Posicion"]}</td> <td>{$l["Equipo"]}</td>" ;
                        echo "</tr>";
                }

            }
            echo "</table>";

    ?>
</body>
</html>