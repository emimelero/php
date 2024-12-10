<?php
require_once "Controller/burgerController.php";
    $index = new burgerController;
    $action = $_GET["action"] ?? null;
    $id = $_GET["id"] ?? null;
    
    if($action == "edit"){
        $index->edit($id);
    } elseif ($action == "delete") {
        $index->delete($id);
    } elseif ($action == "create"){
        $index->create();
    } else{
        $index->index();
    }
?>