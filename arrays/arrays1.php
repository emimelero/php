<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays 1</title>
</head>
<body>
    <?php
    $array=[];

    for($i = 0; $i<50;$i++){
        $array[$i] = rand(0,99);
    }
    sort($array);
    print_r($array);
    echo array_sum($array)/count($array);
    
    echo "<br>";
    echo $array[0];
    echo "<br>";
    echo $array[49];

    ?>
</body>
</html>