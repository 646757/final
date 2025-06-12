<?php
         $username = "root";
         $password = "";
         $servername = "localhost";
         $database = "cetis131d";
                  $conexion = new mysqli("localhost", "root", "", "cetis131d");
                  if($conexion->connect_error){
                    die("La conexion fallo: " . $conexion->connect_error);
                  }

                  $sql_edad = "SELECT id, edad FROM edades";
                  $result_edad = $conexion->query($sql_edad);

                  $sql_colonia = "SELECT id, colonia FROM colonia";
                  $result_colonia = $conexion->query($sql_colonia);

                  $sql_especialidad = "SELECT id, especialidad FROM especialidad";
                  $result_especialidad = $conexion->query($sql_especialidad);

                  $sql_genero = "SELECT id, genero FROM genero";
                  $result_genero = $conexion->query($sql_genero);


                  function InsertarAlumno($conexion)
                  {
                   
                   if ($_SERVER["REQUEST_METHOD"] == "POST") {
                   var_dump($_POST);
                  $numero_control = $conexion->real_escape_string($_POST["numero_control"]);
                  $nombre = $conexion->real_escape_string($_POST["nombre"]);
                  $apellido_paterno = $conexion->real_escape_string($_POST["apellido_paterno"]);
                  $apellido_materno = $conexion->real_escape_string($_POST["apellido_materno"]);
                  $edad = $conexion->real_escape_string($_POST["edad"]);
                  $colonia = $conexion->real_escape_string($_POST["colonia"]);
                  $especialidad = $conexion->real_escape_string($_POST["especialidad"]);
                  $genero = $conexion->real_escape_string($_POST["genero"]);
                  $correo = $conexion->real_escape_string($_POST["correo"]);
                  $telefono = $conexion->real_escape_string($_POST["telefono"]);
                  $fecha_ingreso = $conexion->real_escape_string($_POST["fecha_ingreso"]);

                  
    $sql_insert = "INSERT INTO alumnos (numero_control, nombre, apellido_materno, edad, colonia, especialidad, genero, correo, telefono, fecha_ingreso) VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno', '$edad', '$colonia', '$especialidad', '$genero', '$correo', '$telefono', '$fecha_ingreso')";
    if ($conexion-> query($sql_insert) === TRUE) {
        echo "<p class='success'>Nuevo alumno agregado correctamente.</p>";
        header("location: " . $_SERVER['PHP_SELF']);
        exit();
    }else {
        echo "<p class='error'>Error al agregar el alumno: " . $conexion->error . "</p>";
    }
                      }
                  }


                  ?><?php
                  ob_start(); // iniciar buffer de salida
                  ?>
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
<div class="jumbotron"> 
<h1 class="display-4"  style="text-align: center; color: black;font-family: 'Atomic Kittens', sans-serif;">AÑADIR DATOS</h1> 
<div class="container">
    <h2>Registrar Alumno</h2>
    <method="POST">
        <label>Número de Control:</label>
        <input type="text" name="numero_control" required><br>

        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label>Apellido Paterno:</label>
        <input type="text" name="apellido_paterno" required><br>

        <label>Apellido Materno:</label>
        <input type="text" name="apellido_materno" required><br>

        <label>Edad:</label>
        <select name="edad" required>
            <option value ="">seleccione una edad</option>
            <?php while($row = $result_edad->fetch_assoc()){
                echo "<option value = '" . $row["id"] . " '>" . $row["edad"] . "</option>";
            } ?>
        </select><br>

        <label>Colonia:</label>
        <select name="colonia" required>
        <option value ="">seleccione una colonia</option>
            <?php while($row = $result_colonia->fetch_assoc()){
                echo "<option value = '" . $row["id"] . " '>" . $row["colonia"] . "</option>";
            } ?>
          </select><br>
       
        <label>Especialidad:</label>
        <select name="especialidad" required>
        <option value ="">seleccione una especialidad</option>
            <?php while($row = $result_especialidad->fetch_assoc()){
                echo "<option value = '" . $row["id"] . " '>" . $row["especialidad"] . "</option>";
            } ?>
        </select><br>

        <label>Género:</label>
        <select name="genero" required>
        <option value ="">seleccione un genero</option>
            <?php while($row = $result_genero->fetch_assoc()){
                echo "<option value = '" . $row["id"] . " '>" . $row["genero"] . "</option>";
            } ?>
        </select><br>


        <label>Correo:</label>
        <input type="email" name="correo" required><br>

        <label>Teléfono:</label>
        <input type="text" name="telefono" required><br>

        <label>Fecha de Ingreso:</label>
        <input type="date" name="fecha_ingreso" required><br>

        <input type="submit" value="Agregar Alumno">
    </form>

</body>
</html>
                  