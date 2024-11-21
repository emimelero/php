<?php
  require_once "conecta.php";

  
  // MYSQL: Borrado y creación de base de datos y tablas



    $pdo=conectaDb();



    $insercion = $pdo->prepare("INSERT INTO task(title, descripcion,created_at) VALUES(:title, :descripcion, :created_at)");
                 $insercion->bindParam(':title', $_REQUEST['title']);
                 $insercion->bindParam(':descripcion', $_REQUEST['descripcion']);
                 $insercion->bindParam(':created_at', $_REQUEST['created_at']);
             

    if(!$insercion->execute()) 
        echo "<p class=\"aviso\">Error al ejecutar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()}</p>\n";
    
   


$pdo = null;
header("Location:crud_inicio.php");

