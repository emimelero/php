<?php


    $host = "localhost";
    $nombreBD = "videojuegos";
    $usuario = "root";
    $password = "";
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8",
        $usuario, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
    $consulta = $pdo->prepare("CREATE TABLE task(
        id INT(11) PRIMARY KEY AUTO_INCREMENT,
        title VARCHAR(255) NOT NULL,
        description TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );");
    $consulta->execute();
    while($registro = $consulta->fetch())




?>