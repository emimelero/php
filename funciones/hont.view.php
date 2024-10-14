<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Hont</title>
</head>
<body>
    <?php
    echo "<table border='1'>";
    echo "<tr>";
    echo "<td></td>";
    for($i = 1; $i <= $escanos; $i++) {
        echo "<td>Escaño $i</td>";
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
</body>
</html>