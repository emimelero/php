<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Intercambia</title>
</head>
<body>
    <?php
    function intercambia(&$a,&$b){
        $aux = $a;
        $a=$b;
        $b=$aux;
    }

    $a = 10;
    $b=5;

    echo "$a , $b";
    echo "<br>";
    intercambia($a,$b);

    echo "$a , $b";
    ?>
</body>
</html>