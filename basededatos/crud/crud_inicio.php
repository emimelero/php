<?php
include_once("header.php");
?>
   <div class="row">
   					<a href="login.php" style="position:absolute; right:10px; top:5px;"><img src='power-svgrepo-com.svg' width='32' height='32'></a>
                    
					<div class="col-sm-8"><h2>Bienvenido, <b><?php echo $_REQUEST["nombre"];?> </b></h2></div>
					<div class="col-sm-8"><h2>Listado de Tareas</h2></div>

                </div>
            </div>
			<div class="row">
				<form action="insertar.php" method="post">
				<div class="col-md-6">
					<label>Titulo:</label>
					<input type="text" name="title" id="title" class='form-control' maxlength="100" required >
				</div>
				<div class="col-md-6">
					<label>Descripcion:</label>
					<input type="text" name="descripcion" id="descripcion" class='form-control' maxlength="100" required>
				</div>

				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-info">Registrar</button>
				</div>
				</form>
			</div>
        </div>
    </div>    
	<footer>
</div>
</footer> 
</body>
<?php
  include("listar.php");
?>
</html>