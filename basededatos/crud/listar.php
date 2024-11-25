<?php
include_once("header.php");
?>
                <div class="row">
                    <div class="col-sm-8"><h2>Listado de Tareas</h2></div>

                </div>
            </div>
<?php
  require_once "conecta.php";
  $pdo=conectaDb();

  echo "<a href='crud_inicio.php'></a>";

  $consulta = $pdo->prepare("SELECT * FROM task ");
  echo "<table class='table'><thead>";
  echo "<tr> <th scope='col'>Nombre</th><th scope='col'>Descripcion</th><th scope='col'>Fecha</th><th scope='col'>Opciones</th></tr>";
  echo "</thead><tbody>";
  $consulta->execute();
  while($registro = $consulta->fetch())
    {
      $titol=$registro['title'];
    
    echo "<tr><td>".$registro['title']."</td><td>".$registro['descripcion']."</td><td>".$registro['created_at'].
    "</td><td>"."<a href=formulario.php?id=".$registro['id']."><img src='modificar.svg' width='32' height='32'></a>
    <a href=borrar.php?id=".$registro['id']."><img src='borrado1.svg' width='32' height='32'></a>
    </td>".
    "</tr>";
    }
  echo "</tbody></table>";
  $pdo = null;
  ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>