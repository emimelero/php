<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrays 2</title>
</head>
<body>
    <?php
    $array=[];

    for($i = 0; $i<100;$i++){
        $array[$i] = rand(0,1);
        if($array[$i] == 0){
            $array[$i] = "M";
        }else $array[$i] = "F"; 
        
    }

    print_r($array);
    ?>
</body>
</html>