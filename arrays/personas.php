<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
</head>
<body>
    <?php
    $personas = array(
        array(
        'nombre' => 'paco',
        'altura' => 121,
        'email' => 'paco121@gmail.com'
        ),
    array(
        'nombre' => 'ramon',
        'altura' => 181,
        'email' => 'ramon181@gmail.com'
    ),
    array(
        'nombre' => 'luis',
        'altura' => 201,
        'email' => 'luis201@gmail.com'
    )
    );

    echo "<table border='1'>";
    echo "<tr><th>Nombre</th><th>Altura</th><th>Email</th></tr>";

    foreach ($personas as $persona) {
        echo "<tr>";
        echo "<td>{$persona['nombre']}</td>";
        echo "<td>{$persona['altura']}</td>";
        echo "<td>{$persona['email']}</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>

    
</body>
</html> 


