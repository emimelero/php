<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Hont</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: blue;
            color: white;
        }
        td {
            font-size: 1.1em;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <div>
        <h1>Distribución de escaños (Método D'Hondt)</h1>
        <?php
        $votos = [500000, 300000, 150000, 50000];
        $escanos = 7;
        $partidos = ["Partido A", "Partido B", "Partido C", "Partido D"];

        // Calcular los 7 números más grandes
        $numeros_may = [];
        for($i = 0; $i < count($votos); $i++) {
            for($j = 1; $j <= $escanos; $j++) {
                $numeros_may[] = round($votos[$i] / $j, 1);
            }
        }
        rsort($numeros_may);
        $numeros_may = array_slice($numeros_may, 0, 7);

        // Crear la tabla
        echo "<table>";
        echo "<tr><th></th>";
        for($i = 1; $i <= $escanos; $i++) {
            echo "<th>Escaño $i</th>";
        }
        echo "</tr>";

        for($i = 0; $i < count($votos); $i++) {
            echo "<tr>";
            echo "<td>{$partidos[$i]}</td>";
            for($j = 1; $j <= $escanos; $j++) {
                $new_num = round($votos[$i] / $j, 1);
                if (in_array($new_num, $numeros_may)) {
                    echo "<td style='background-color: yellow;'>{$new_num}</td>";
                    $key = array_search($new_num, $numeros_may);
                    unset($numeros_may[$key]);
                } else {
                    echo "<td>{$new_num}</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
</body>
</html>
