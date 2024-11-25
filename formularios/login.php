<?php include "header.php";?>
<head>
    <style>
        .container{
            background-color:darkgrey;
            border-radius:5px;
            border:2px solid;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <form action="comprueba_login.php" method="post" class="row g-2">
            <div class="col-md-6">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa aquí tu numbre.">
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa aquí tu contraseña.">
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Log In</button>
            </div>
        </form>
    </div>
</body>
</html>