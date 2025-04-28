<?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "cetis131"; //base de datos relacionada
            $conexion = new mysqli($servername, $username, $password, $database);
            if($conexion->connect_error){
                    die("La conexion fallo: " . $conexion->connect_error);
                }

        //Obtener los datos del dropdown
        $sql_edad = "SELECT id, edad FROM edades";
        $sql_colonias = "SELECT id, colonia FROM colonias";
        $sql_especialidades = "SELECT id, especialidad FROM especialidades";
        $sql_genero = "SELECT id, genero FROM generos";
       
        $result_edad = $conexion->query($sql_edad);
        $result_colonias = $conexion->query($sql_colonias);
        $result_especialidades = $conexion->query($sql_especialidades);
        $result_genero = $conexion->query($sql_genero);

        //insertar alumnos
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
              <a class="dropdown-item" href="/xmen97/tomas02.php">Practica 2</a><br>
              <a class="dropdown-item" href="/xmen97/tomas03.php">Practica 3</a>
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="unidad1.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">UNIDAD 2</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropDownMenuLink">
              <a class="dropdown-item" href="/xmen97/tomas04.html">Practica 4</a><br>
              <a class="dropdown-item" href="/xmen97/tomas05.html">Practica 5</a><br>
              <a class="dropdown-item" href="/xmen97/daniel01.html">Practica 5a</a><br>
              <a class="dropdown-item" href="/xmen97/tomas05a.html">Practica 5b</a><br>
              <a class="dropdown-item" href="/xmen97/tomas06.html">Practica 6</a>
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
            <select name="edad" required>
                <option value="">Seleccione una edad</option>
                <?php while($row = $result_edad->fetch_assoc()){
                    echo "<option value = ' " . $row["id"] . " '>" . $row["edad"] . "</option>";
                }?>
            </select>

            <label for="colonia">Colonias: </label>
            <select name="colonia" required>
                <option value="">Seleccione una Colonia</option>
                <?php while($row = $result_colonias->fetch_assoc()){
                    echo "<option value = ' " . $row["id"] . " '>" . $row["colonia"] . "</option>";
                }?>
            </select>
            <label for="especialidades">Especialidades: </label>
            <select name="especialidades" required>
                <option value="">Seleccione una Especialidad</option>
                <?php while($row = $result_especialidades->fetch_assoc()){
                    echo "<option value = ' " . $row["id"] . " '>" . $row["especialidad"] . "</option>";
                }?>
            </select>
            <label for="genero">Genero: </label>
            <select name="genero" required>
                <option value="">Seleccione un Genero</option>
                <?php while($row = $result_genero->fetch_assoc()){
                    echo "<option value = ' " . $row["id"] . " '>" . $row["genero"] . "</option>";
                }?>
            </select>
    
        
        <label for="correo">Correo Electronico: </label>
        <input type="email" id="correo" name="correo" required></br>
        <label for="telefono">Telefono: </label>
        <input type="text" id="telefono" name="telefono" required></br>
        <label for="fecha_ingreso">Fecha de Ingreso: </label>
        <input type="date" id="fecha_ingreso" name="fecha_ingreso" required></br>
 <input type="submit" value="Agregar Registro">
 </form>
</div>
            </body>
</html>