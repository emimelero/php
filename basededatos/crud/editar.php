<?php

require_once "conecta.php";
$pdo=conectaDb();

$insercion = $pdo->prepare("update task set title=:title, descripcion=:descripcion, created_at=:created_at where id=:id");
$insercion->bindParam(':id', $_REQUEST['id']);
$insercion->bindParam(':title', $_REQUEST['title']);
$insercion->bindParam(':descripcion', $_REQUEST['descripcion']);
$insercion->bindParam(':created_at', $_REQUEST['created_at']);




if(!$insercion->execute()) 
echo "<p class=\"aviso\">Error al ejecutar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()}</p>\n";


$pdo = null;
header("Refresh:1; url=crud_inicio.php");

echo '<p>En breve le redirigiremos al listado.</p>';