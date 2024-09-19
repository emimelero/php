<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parametros Variables</title>
</head>
<body>
    <?php
    function mayor(...$numeros){
        $nums = func_get_args();
        rsort($nums);
        echo $nums[0];
    }

    mayor(2,3,1,54,76,4,3,1,54,3,52,107,23);
    ?>
</body>
</html>