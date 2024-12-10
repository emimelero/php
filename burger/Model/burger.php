<?php

require_once "Config/conexion.php";

class Burger{

    private $pdo;
    public function __construct(){
        $database = new Conexion();
        $this->pdo = $database->conectar();
    }

    public function getAll(){

        try{
            $query = "SELECT * FROM items";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetchAll();
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
    public function getById($id){
        try{
            $query = "SELECT * FROM items WHERE id = $id";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetch();
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
    public function delete($i){
        try{
            $insercion = $this->pdo->prepare("DELETE FROM items WHERE id=:id");
            $insercion->bindParam(":id", $i);
            return $insercion->execute();
        }catch(PDOException $e){
            die($e->$getMessage());
        }
    }
    public function edit($n, $d, $p, $i, $c){
        try{
            $insercion = $this->pdo_<prepare("UPDATE items SET name=:name, price=:price WHERE id=:id");
            $insercion->bindParam(":name", $n);
            $insercion->bindParam(":description", $d);
            $insercion->bindParam(":price", $p);
            $insercion->bindParam(":image", $i);
            $insercion->bindParam(":category", $c);
            $insercion->execute();
            return true;
        }catch(PDOException $e){
            die ($e->getMessage());
        }
    }
    public function save($n, $d, $p, $i, $c){
        try{
            $insercion = $this->pdo->prepare("INSERT INTO items(name, description, price, image, category) VALUES(:name, :description,:price, :image, :category)");
            $insercion->bindParam(":name", $n);
            $insercion->bindParam(":description", $d);
            $insercion->bindParam(":price", $p);
            $insercion->bindParam(":image", $i);
            $insercion->bindParam(":category", $c);
            return $insercion->execute();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function update($id, $name, $description, $price, $image, $category){
        $query = "UPDATE items SET name = :name, description = :description, price = :price, image = :image, category = :category WHERE id = :id";
        $insercion = $this->pdo->prepare($query);
        $insercion->bindParam(":id", $id);
        $insercion->bindParam(":name", $name);
        $insercion->bindParam(":description", $description);
        $insercion->bindParam(":price", $price);
        $insercion->bindParam(":image", $image);
        $insercion->bindParam(":category", $category);
        return $insercion->execute();
    }
}
?>