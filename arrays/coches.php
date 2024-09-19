<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coches</title>
</head>
<body>
    <?php
    $coches = array(
        "1111abc" => array("ford","fiesta", 2),
        "2222abc" => array("renault","uno", 2),
        "3333abc" => array("honda","civic", 5),
        "4444abc" => array("kia","niro", 4)
    );

    ksort($coches);

    echo "<h1>Listado de Coches</h1>";
    echo "<table border='1'>";
    echo "<tr><th>Matrícula</th><th>Marca</th><th>Modelo</th><th>Número de Puertas</th></tr>";

// Recorremos el array y mostramos los datos en una tabla
    foreach ($coches as $matricula => $datos) {
        echo "<tr>";
        echo "<td>{$matricula}</td>";
        echo "<td>{$datos[0]}</td>";
        echo "<td>{$datos[1]}</td>";
        echo "<td>{$datos[2]}</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>