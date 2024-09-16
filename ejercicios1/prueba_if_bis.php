<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ifs</title>
</head>
<body>
    <?php
    $nota1 = 6.6;
    $nota2 = 7.8;
    $nota3 = 9;

    if($nota1 > $nota2 and $nota1 > $nota3){
        echo "La nota 1 es mayor que la nota 2";
    }
    elseif ($nota1 < $nota2){
        echo "Nota 2 es mayor que la nota 1";
    }
    else echo "La nota 1 y la nota 2 son iguales"

    ?>
</body>
</html>