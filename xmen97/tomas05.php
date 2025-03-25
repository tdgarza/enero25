<?php
  ob_start();
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
    <link href="https://fonts.cdnfonts.com/css/so-this-is-it" rel="stylesheet">
    <title>RELACIONES</title>
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
  ">PAGINA DE METER Y MOSTRAR DATOS RELACIONADOS</h1>
  <style>
    h1{
        font-size:12px;
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
    h1, h2{
      font-family: 'so this is it', sans-serif; 
      text-shadow: 0 1 1 black;
      text-align:center;
      color:#ff79c6;
      margin-bottom:15px;
      font-size:15px;
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
  <div class="container1" style=" max-width:600px; margin:auto;">
 <form method="POST" id="formulario">
        <label for="numero_control">Numero de Control: </label>
        <input type="text" id="numero_control" name="numero_control" required></br>
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre" required></br>
        <label for="apellido_paterno">Apellido Paterno: </label>
        <input type="text" id="apellido_paterno" name="apellido_paterno" required></br>
        <label for="apellido_materno">Apellido Materno: </label>
        <input type="text" id="apellido_materno" name="apellido_materno" required></br>
        <label for="edad">Edad: </label>
        <input type="text" id="edad" name="edad" required></br>
        <label for="colonia">Colonia: </label>
        <input type="text" id="colonia" name="colonia" required></br>
        <label for="especialidad">Especialidad: </label>
        <input type="text" id="especialidad" name="especialidad" required></br>
        <label for="genero">Genero: </label>
        <input type="text" id="genero" name="genero" required></br>
        <label for="correo">Correo Electronico: </label>
        <input type="email" id="correo" name="correo" required></br>
        <label for="telefono">Telefono: </label>
        <input type="text" id="telefono" name="telefono" required></br>
        <label for="fecha_ingreso">Fecha de Ingreso: </label>
        <input type="date" id="fecha_ingreso" name="fecha_ingreso" required></br>
 <input type="submit" value="Agregar Registro">
 </form>
</div>
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $username = "root";
    $password = "";
    $servername = "localhost";
    $database = "escuela";
        $conexion = new mysqli($servername, $username, $password, $database);
         if($conexion->connect_error){
                die("La conexion fallo: " . $conexion->connect_error);
            }
    function insertarAlumno($conexion)
    {
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            var_dump($_POST); //linea dedicada para depurar
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

               // Consulta SQL para insertar los datos
               $sql = "INSERT INTO alumnos (numero_control, nombre, apellido_paterno, apellido_materno, edad, colonia, especialidad, genero, correo, telefono, fecha_ingreso) 
               VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno', '$edad', '$colonia', '$especialidad', '$genero', '$correo', '$telefono', '$fecha_ingreso')";
            if ($conexion->query($sql) === TRUE){
                echo "<p class='success'>Nuevo alumno agregado con éxito.</p>";
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            }else{
                echo "<p class='error'>Error al agregar al alumno: " . $conexion->error . "</p>";
                }
              }
            }
            insertarAlumno($conexion);
            // Mostrar datos de la tabla
            $sql = "SELECT * FROM alumnos";
            $resultado = $conexion->query($sql);
            if ($resultado->num_rows > 0) {
                echo "<table class='table table-bordered'>";
                echo "<tr><th>Número de Control</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Edad</th><th>Colonia</th><th>Especialidad</th><th>Género</th><th>Correo</th><th>Teléfono</th><th>Fecha de Ingreso</th></tr>";
                while ($row = $resultado->fetch_assoc()) {

            echo "<tr>
            <td>" . $row["numero_control"] . "</td>
            <td>" . $row["nombre"] . "</td>
            <td>" . $row["apellido_paterno"] . "</td>
            <td>" . $row["apellido_materno"] . "</td>
            <td>" . $row["id_edad"] . "</td>
            <td>" . $row["id_colonia"] . "</td>
            <td>" . $row["id_especialidad"] . "</td>
            <td>" . $row["id_genero"] . "</td>
            <td>" . $row["correo"] . "</td>
            <td>" . $row["telefono"] . "</td>
            <td>" . $row["fecha_ingreso"] . "</td>
          </tr>";
}
echo "</table>";
} else {
echo "<p>No se encontraron registros en la base de datos.</p>";
}
            
                $conexion->close();
   ?>
</body>
</html>

