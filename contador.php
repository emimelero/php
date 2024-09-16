<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>

    <h2>Cuenta desde 0 a 100</h2>
    <p>Aqui se va  mostrar una cuenta desde 0 hasta 100</p>
    <?php

    for($i = 0; $i <= 100; $i++){
        echo "$i ,";
        
    }
    ?>
    <h2>Cuenta atras desde 10 hasta 0</h2>
    <p>Aqui se va  mostrar una cuenta desde 10 hasta 0</p>
    <?php
    $num = 10;
        while($num >= 0){
            echo "$num, ";
            echo "<br>";
            $num--;
        }



    ?>
</body>
</html>