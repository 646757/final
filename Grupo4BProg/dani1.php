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
                <a class="dropdown-item" href="http://localhost/papeleria/Grupo4BProg/dani4.php/">practica4</a><br>
                  <a class="dropdown-item" href="http://localhost/papeleria/Grupo4BProg/daniela.php/">Practica de tienda</a><br>
                  <a class="dropdown-item" href="http://localhost/papeleria/Grupo4BProg/dani5.php/">practica5</a><br>
                  <a class="dropdown-item" href="http://localhost/papeleria/Grupo4BProg/dani5a.php/">Practica 5a</a><br>
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
<h1 class="display-4"  style="text-align: center; color: black;font-family: 'Wallpoet', sans-serif;">PAGINA PARA MOSTRAR DATOS</h1>   
<?php
         $username = "root";
         $password = "";
         $servername = "localhost";
         $database = "papeleria";
                  $conexion = new mysqli("localhost", "root", "", "papeleria");
                  if($conexion->connect_error){
                    die("La conexion fallo: " . $conexion->connect_error);
                  }
                  $sql = "SELECT * FROM utiles";
                  $resultado = $conexion->query($sql);
                  if($_SERVER["REQUEST_METHOD"]=="POST"){
                    //obtener datos del formulario
                    $id = $_POST["id"];
                    $nombredelproducto = $_POST["nombre del producto"];
                    $cantidad = $_POST["cantidad"];
                    $precio = $_POST["precio"];
                    $descripcion = $_POST["descripcion"];

                    $sql = "INSERT INTO utiles (id, nombre del producto, cantidad, precio, descripcion) VALUES ($id, $nombredelproducto, $cantidad, $precio, $descripcion)";
                   if($conexion->query($sql)==TRUE) {
                    echo"<p class='success'>NUEVO UTIL AGREGADO CORRECTAMENTE.</p>";
                  } else {
                  echo "<p class='success'>Error al agregar el producto: " . $conexion->error . "</p> ";
                }
            }
  ?>
  
  <style>
        h2 {
            color: black;
            text-align: center;
            margin-bottom: 20px;
            font-family: 'Lovers Quarrel', sans-serif;
        }

        table {
          width: 100%;
          border-collapse: collapse;
          margin-top: 20px;
          border: 2px solid blueviolet;
        }

        th, td {
          padding: 10px;
          text-align: left;
          border-bottom: 2px solid rgb(245, 10, 194);
        }

        tr:nth-child(even) {
          background-color:rgb(191, 17, 214);
          color: black;
    }
</style>


<div class="container">
<h2>Datos de la tabla de los utiles</h2>

  <?php if($resultado->num_rows >0):?>
    <table>
      <tr> 
         <th>id</th>
         <th>nombre del producto</th>
         <th>cantidad</th>
         <th>precio</th>
         <th>descripcion</th>
      </tr>

      <?php while ($fila = $resultado->fetch_assoc()): ?>
      </tr>
           <td><?php echo $fila['id']; ?></td>
           <td><?php echo $fila['nombre']; ?></td>
           <td><?php echo $fila['cantidad']; ?></td>
           <td><?php echo $fila['precio']; ?></td>
           <td><?php echo $fila['descripcion']; ?></td>   
      </tr>
      <?php endwhile; ?>
      </table> 
      <?php else: ?>
        <p>No se encontraron los utiles</p>
        <?php endif; ?>
      </div>

</div>
</body>
</html>