<?php
    //print_r($_GET);
    $x = $_GET["x"];
    $y = $_GET["y"];
    $suma = $x + $y;
    $resta = $x - $y;
    $mult = $x * $y;
    $div = $x / $y;

    //echo("Suma: $suma Resta: $resta Multiplicacion: $mult Division: $div");

    //print_r($_SERVER);
    
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            text-align:center;
            margin:auto;
        }
    </style>
</head>
<body>
    <?php
       echo "<table border='2' solid black>";
        echo"<tr>";
            echo "<td>Números</td>";
            echo "<td>Suma</td>";
            echo "<td>Resta</td>";
            echo "<td>Multiplicacion</td>";
            echo "<td>Division</td>";
        echo "</tr>";
        echo"<tr>";
            echo "<td>$x Y $y</td>";
            echo "<td>$suma</td>";
            echo "<td>$resta</td>";
            echo "<td>$mult</td>";
            echo "<td>$div</td>";
        echo "</tr>";
    echo "</table>";



    ?>
</body>
</html>