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
    <link href="https://fonts.cdnfonts.com/css/so-this-is-it" rel="stylesheet">
    <title>Tomas Daniel Page</title>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: #1b0a43;">
      <div class="container">
        <a class="navbar-brand" href="index.html" style="color:white";>INICIO</a>
     

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="nav navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="unidad1.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">UNIDAD 1</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropDownMenuLink">
              <a class="dropdown-item" href="/xmen97/tomas01.php">Mostrar Datos</a><br>
              <a class="dropdown-item" href="/tomas02.php">Practica 2</a><br>
              <a class="dropdown-item" href="/tomas03.php">Practica 3</a>
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="unidad1.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">UNIDAD 2</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropDownMenuLink">
              <a class="dropdown-item" href="/tomas04.html">Practica 4</a><br>
              <a class="dropdown-item" href="/tomas05.html">Practica 5</a><br>
              <a class="dropdown-item" href="/tomas06.html">Practica 6</a>
</div>
          </li>
        </ul>
        <ul class="nav navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="unidad1.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">UNIDAD 3</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropDownMenuLink">
              <a class="dropdown-item" href="/tomas07.html">Practica 7</a><br>
              <a class="dropdown-item" href="/tomas08.html">Practica 8</a><br>
              <a class="dropdown-item" href="/tomas09.html">Practica 9</a><br>
              <a class="dropdown-item" href="/tomas10.html">Practica Final</a>
            
          </li>
        </ul>
       </div>
      </div>
      </div>
      </nav>

   <div class="jumbotron">
  <h1 class="display-4" style="text-align: center; color: #1E2D24;                                                                    
  font-family: 'so this is it', sans-serif; text-shadow: 0 1 1 black;
  ">PAGINA DE MOSTRAR DATOS</h1>
  <style>
    h1{
      text-align:center;
      color:#334139;
      margin-bottom:20px;
    }
    table{
      width: 100%;
      border-collapse: collapse;
      margin-top:50px;
      border-radius:50px;
    }
    th, td{
      padding:10px;
      text-align:left;
      border-bottom: 1px solid #ddd;
    }
    tr:nth-child(even){
      background-color:#F9B4ED;
      color:black;
    }
    tr:nth-child(odd){
      background-color:white;
      color:black;
    }
    th{
      background-color:#C52184;
      color:white;
    }
  </style>
  <style>
    .container1{
      justify-content:center;
      align-items:center;
      width:50%;
      background-color:#282a36;
      padding: 20px;
      border-radius:10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      color:white;
    }
    h1{
      font-family: 'so this is it', sans-serif; 
      text-shadow: 0 1 1 black;
      text-align:center;
      color:#ff79c6;
      margin-bottom:15px;
    }
    form{
      display:flex;
      flex-direction:column;
    }
    label{
      font-size:16px;
      margin-bottom:5px;
    }
    input[type="text"] {
    padding: 8px;
    margin-bottom: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    background-color: #44475a;
    color: #fff;
}
input[type="submit"] {
    padding: 10px;
    background-color: #50fa7b;
    border: none;
    color: #282a36;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
}
input[type="submit"]:hover {
    background-color: #3ae374;
}
  </style>
  <h1>METER DATOS</h1>  
<div class="container1">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="formulario">
    <label for="Nombre">Nombre: </label>
    <input type="text" id="Nombre" name="Nombre" required><br>
    <label for="Alias">Alias: </label>
    <input type="text" id="Alias" name="Alias" required><br>
    <label for="FechaDeCreacion">Fecha de Creacion: </label>
    <input type="text" id="FechaDeCreacion" name="FechaDeCreacion" required><br>
    <label for="Descripcion">Descripcion: </label>
    <input type="text" id="Descripcion" name="Descripcion" required><br>

    <input type="submit" value="Agregar registro">
</form>

<?php
    $username = "root";
    $password = "";
    $servername = "localhost";
    $database = "marvel";
        $conexion = new mysqli($servername, $username, $password, $database);
         if($conexion->connect_error){
                die("La conexion fallo: " . $conexion->connect_error);
            }
           if($_SERVER["REQUEST_METHOD"]=="POST"){
            //se obtienen los datos del formulario
            $Nombre = $_POST["Nombre"]; //tal cual aparecen en su base de datos lo que va en comillas
            $Alias = $_POST["Alias"]; //tal cual aparecen en su base de datos lo que va en comillas
            $FechaDeCreacion  = $_POST["FechaDeCreacion"]; //tal cual aparecen en su base de datos lo que va en comillas
            $Descripcion = $_POST["Descripcion"]; //tal cual aparecen en su base de datos lo que va en comillas

            $sql = "INSERT INTO Personajes (Nombre, Alias, FechaDeCreacion, Descripcion) VALUES ('$Nombre', '$Alias', '$FechaDeCreacion', '$Descripcion')";
            if($conexion->query($sql)==TRUE){
                echo "<p class='success'>Nuevo personaje agregado con exito. </p>";
            }else{
                echo "<p class='error'> Error al agregar al personaje: " . $conexion->error . "</p>";
           }
        }
       // Mostrar datos de la tabla
       $sql = "SELECT * FROM Personajes";
       $resultado = $conexion->query($sql);

       if ($resultado->num_rows > 0) {
           echo "<table class='table table-bordered'>";
           echo "<tr><th>Id</th><th>Nombre</th><th>Alias</th><th>Fecha de Creación</th><th>Descripción</th></tr>";
           while ($row = $resultado->fetch_assoc()) {
               echo "<tr><td>" . $row["PersonajeID"] . "</td><td>" . $row["Nombre"] . "</td><td>" . $row["Alias"] . "</td><td>" . $row["FechaDeCreacion"] . "</td><td>" . $row["Descripcion"] . "</td></tr>";
           }
           echo "</table>";
       } else {
           echo "<p>No se encontraron registros en la base de datos.</p>";
       }

       $conexion->close();
   ?>
</div>
</body>
</html>