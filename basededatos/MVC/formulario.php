<?php
include_once("header.php");
?>
                <div class="row">
                    <div class="col-sm-8"><h2>Modificar <b>Tarea</b></h2></div>

                </div>
            </div>
            <?php
             require_once "conecta.php";
             $pdo=conectaDb();
             $consulta = $pdo->prepare("SELECT * FROM task where id=:id");
             $consulta->bindParam(':id', $_REQUEST['id']);

 
  $consulta->execute();
  $registro = $consulta->fetch();
      $id=$registro['id'];
      $titol=$registro['title'];
      $descripcion=$registro['descripcion'];
      $imagen=$registro['imagen'];
        echo "<div class='row'><form action='editar.php' method='post'>";

        echo "<div class='col-md-6'><label>Titulo:</label>";
        echo "  <input type='text' name='title' id='title' class='form-control' maxlength='100' value=$titol ></div>";

        echo "<div class='col-md-6'><label>Descripcion:</label>";
        echo "  <input type='text' name='descripcion' id='descripcion' class='form-control' maxlength='100' value=$descripcion ></div>";

        echo "<div class='col-md-6'><label>Imagen:</label>";
        echo " <input type='url' name='imagen' id='imagen' class='form-control' value=$imagen ></div>";

        echo "  <input type='hidden' name='id' id='id' class='form-control' maxlength='100' value=$id >";
        echo " <div class='col-md-12 pull-right'><hr><button type='submit' class='btn btn-info'>Guardar datos</button></div></form></div>";


        echo "<img src=$imagen heigth=350px, width=350px>";


    
  $pdo = null;
            ?>
         
			
        </div>
    </div>     
</body>
</html>