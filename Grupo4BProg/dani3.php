<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/wallpoet" rel="stylesheet">
                          
      <!-- Navbar content -->
    </nav>
    <title>Daniela</title> 
</head>
<body>

<nav class="navbar navbar-light" style="background-color:  rgb(236, 40, 210);">
  <div class="container">
    <a class="navbar-brand" href="index.html" style="color:white;">INICIO</a>

    <div class="collaspe navbar-collaspe" id="navbarNavDropdown">
    <ul class="nav navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="index.html" href="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false" style="color: white;">unidad 1</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="http://localhost/papeleria/Grupo4BProg/dani1.php/index.html">practica1</a><br>
          <a class="dropdown-item" href="http://localhost/papeleria/Grupo4BProg/dani2.php/index.html">practica2</a><br>
          <a class="dropdown-item" href="http://localhost/papeleria/Grupo4BProg/dani3.php/index.html">practica3</a><br>
        </div>
      </li>
    </ul>
    <ul class="nav navbar-nav">
    <li class="nav-item dropdown">
     
                <a class="nav-link dropdown-toggle" href="index.html" href="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" style="color: white;">unidad 2</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="http://localhost/papeleria/Grupo4BProg/dani4.php/index.html">practica4</a><br>
                  <a class="dropdown-item" href="http://localhost/papeleria/Grupo4BProg/daniela.php/index.html">Practica de tienda</a><br>
                  <a class="dropdown-item" href="http://localhost/papeleria/Grupo4BProg/dani5.php/index.html">practica5</a><br>
                  <a class="dropdown-item" href="http://localhost/papeleria/Grupo4BProg/dani5a.php/index.html">Practica 5a</a><br>
                  <a class="dropdown-item" href="///">practica6</a>
              </li>
            </ul>
                    <ul class="nav navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index.html" href="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" style="color: white;">unidad 3</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="/practica7.html">practica7</a><br>
                          <a class="dropdown-item" href="/practica8.html">practica8</a><br>
                          <a class="dropdown-item" href="/practica9.html">practica9</a><br>
                          <a class="dropdown-item" href="/practica10.html">practicafinal</a>
                        </li>
                        </ul>
                        </div>
                        </div>
</div>

<div class="container">
    <div class="jumbotron">
    <h1 class="display-4"  style="text-align: center; color: black;font-family: 'Atomic Kittens', sans-serif;">AÑADIR DATOS</h1> 
        <h2 style="text-align: center;">La tabla de utiles</h2>

        <form action="" method="post" id="formulario">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" class="form-control" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="marca">Nombre del producto:</label>
                <input type="text" class="form-control" id="nombre del producto" name="nombre del producto" required>
            </div>
            <div class="form-group">
                <label for="tamano">Cantidad:</label>
                <input type="text" class="form-control" id="cantidad" name="cantidad" required>
            </div>
            <div class="form-group">
                <label for="cantidad">Precio:</label>
                <input type="number" class="form-control" id="precio" name="precio" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar al Registro</button>
        </form>
        <br>
         
        <style>
        
          
          h1,h2{
            text-align: center;
            color:rgb(22, 20, 21);
            margin-bottom: 15px;
            font-family: 'diablo', sans-serif;
          }

          form{
            display: flex;
            flex-direction: column;
          }
          label{
            font-size: 16px;
            margin-bottom: ;
          }

        </style>



        <?php
            $conexion = new mysqli("localhost", "root", "", "papeleria");

            if ($conexion->connect_error) {
                die("<div class='alert alert-danger'>La conexión falló: " . $conexion->connect_error . "</div>");
            }

            function insertarbalones($conexion) {

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  var_dump($_POST);
                $id = $conexion->real_escape_string($_POST["id"]);
                $nombredelproducto = $conexion->real_escape_string($_POST["nombre del producto"]);
                $cantidad = $conexion->real_escape_string($_POST["cantidad"]);
                $precio = $conexion->real_escape_string($_POST["precio"]);
                $descripcion = $conexion->real_escape_string($_POST["descripcion"]);

                $sql = "INSERT INTO utiles (id, nombre del producto, cantidad, precio, descripcion) VALUES ('$id', '$nombredelproducto', '$cantidad', '$precio', '$descripcion')";
                
                if ($conexion->query($sql) === TRUE) {
                    echo "<div class='alert alert-success'>¡Nuevos utiles agregados correctamente!</div>";
                } else {
                    echo "<div class='alert alert-danger'>Error al agregar los utiles: " . $conexion->error . "</div>";
                }
            }
          }

            $sql = "SELECT * FROM utiles";
            $resultado = $conexion->query($sql);

            if ($resultado->num_rows > 0) {
                echo "<table class='table table-bordered'>";
                echo "<tr><th>id</th><th>nombre del producto</th><th>cantidad</th><th>precio</th><th>descripcion</th></tr>";
                while ($row = $resultado->fetch_assoc()) {
                    echo "<tr><td>" . htmlspecialchars($row["id"]) . "</td><td>" . htmlspecialchars($row["nombre del producto"]) . "</td><td>" . htmlspecialchars($row["cantidad"]) . "</td><td>" . htmlspecialchars($row["precio"]) . "</td><td>" . htmlspecialchars($row["descripcion"]) . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "<div class='alert alert-warning'>No se encontraron registros en la base de datos.</div>";
            }

            $conexion->close();
        ?>
    </div>
</div>

</body>
</html>
