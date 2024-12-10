<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio curriculum</title>
</head>
<body>
    <?php
        $estudios_ca = "Mis estudios son la ESO, el Bachillerato y Ciclo superior de DAW";
        $estudios_en = "My studies are the High school and DAW Vocational Training";
        $estudios_va = "Els meus estudis son la ESO, el Batxillerat y un Grau Suprior de DAW";

        $idioma = "en";
        $estudios = "estudios_" . $idioma;

        echo $$estudios;

    ?>
</body>
</html>