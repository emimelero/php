<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<table border='1'>";
            foreach($nueva_lista as $l){
                if ($l["telefono"] !== ""){
                        echo "<tr>";
                        echo "<td>{$l["id"]}</td><td>{$l["localidad"]}</td><td>{$l["nombre"]}</td><td>{$l["telefono"]}</td>" ;
                        echo "</tr>";
                }

            }
        echo "</table>";

        echo "<br>";

        echo "<h2>Casas sin teléfono de contacto</h2>";

        echo "<table border='1'>";
            foreach($nueva_lista as $l){
                if ($l["telefono"] == ""){
                        echo "<tr>";
                        echo "<td>{$l["id"]}</td><td>{$l["localidad"]}</td><td>{$l["nombre"]}</td>" ;
                        echo "</tr>";
                }

            }
            echo "</table>";

    ?>
</body>
</html>