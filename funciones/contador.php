<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <?php
    function cuenta($a , $b){
        if ($a<$b){
            for ($i = $a; $i<=$b ; $i++){
                echo "$i ,";
            }
        }else{
            for ($i = $b; $i<=$a ; $i++){
                echo "$i ,";
            }
        }
    }

    cuenta(25,10);
    ?>
    
</body>
</html>