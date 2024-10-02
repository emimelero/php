<?php
    if (isset($_POST["aficiones"])){
        $aficiones_seleccionadas = $_POST["aficiones"];
    }

    if (isset($_POST["menu"])){
        $menu_seleccionadas = $_POST["menu"];
    }
    $new_aficiones = implode(",",$aficiones_seleccionadas);
    $new_menu = implode(",",$menu_seleccionadas);
    include "header.php";
?>

<body>
    <?=
        "<table class='table table-striped' >
        <tr>
             <td>Nombre</td>
             <td>Apellido</td>
             <td>Correo</td>
             <td>URL</td>
             <td>Numero de convivientes</td>
             <td>Sexo</td>
             <td>Aficiones</td>
             <td>Menu</td>

        </tr>
        <tr>
            <td>{$_POST['nombre']}</td>
            <td>{$_POST['apellido']}</td>
            <td>{$_POST['email']}</td>
            <td>{$_POST['url']}</td>
            <td>{$_POST['convivientes']}</td>
            <td>{$_POST['sexo']}</td>
            <td>$new_aficiones</td>
            <td>$new_menu</td>
            
         </tr>
     </table>"
        
    ?>
</body>

</html>