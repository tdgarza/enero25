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
                    $sql_edad = "SELECT id, edad FROM edades";
                    $result_edad = $conexion->query($sql_edad);
                    $sql_colonias = "SELECT id, nombre_colonias FROM colonias";
                    $result_colonias = $conexion->query($sql_colonias);
                    $sql_especialidad = "SELECT id, nombre_especialidad FROM especialidades";
                    $result_especialidad = $conexion->query($sql_especialidad);
                    $sql_genero = "SELECT id, nombre_genero FROM generos";
                    $result_genero = $conexion->query($sql_genero);


                if($_SERVER["REQUEST_METHOD"]=="POST"){
                var_dump($_POST); //Linea para depuracion
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

                $sql_insert = "INSERT INTO alumnos (numero_control, nombre, apellido_paterno, apellido_materno, id_edad, id_colonia, id_especialidad, id_genero, correo, telefono, fecha_ingreso) VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno', '$edad', '$colonia', '$especialidad', '$genero', '$correo', '$telefono','$fecha_ingreso')";

                if($conexion->query($sql_insert) === TRUE){
                    echo "<p class = 'success'>Nuevo alumno agregado con exito</p>";
                    header("Location: " . $_SERVER['PHP_SELF']);
                    exit();
                }else{
                    echo "<p class = 'error'>Error: " . $conexion->error . "</p>";
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
    
    <link href="https://fonts.cdnfonts.com/css/no-mystery" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/diablo" rel="stylesheet">
                
    
    <title>Tomas Garza Index</title>
</head>
<body>
  <style>
    h1{
      color:red;
      text-align:center;
      margin-bottom: 20px;
    }
    table{
      width: 50%;
      border-collapse: collapse;
      margin-top:50px;
      border-radius:5px solid #616;
      align-items: center;
    }
    th, td{
      padding: 10px;
      text-align: left;
      border-bottom: 2px solid #ff0d99;
    }
    tr:nth-child(even){
      background-color:#ff9988;
      color:black;
    }
    tr:nth-child(odd){
      background-color:white;
      color:black;
    }
    th{
      background-color: #ee99ee;
      color:white;
    }
  </style>

    <nav class="navbar navbar-light" style="background-color: #f4081c;">
       <div class="container">
        <a class = "navbar-brand" href="#" style="color:white">Inicio</a>
        <!--Un boton de inicio que lleva a si mismo, de color blanco, aqui pueden poner el color que quieran dependiendo de su estilo-->

        <!--A continuacion es el menu dropdown para poner las ligas a las practicas-->
        <div class ="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="nav navbar-nav">
            <li class = "nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color:white" data-toggle="dropdown" aria-haspopup = "true" aria-expanded = "false">
                Unidad 1
              </a>
                <!--Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre+el numero de la practica XX terminando con HTML-->
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/enero25/xmen98/tomas01.php">Mostrar Datos</a><br>
                  <a class="dropdown-item" href="/enero25/xmen98/tomas02.php">Mostrar Datos 2</a><br>
                  <a class="dropdown-item" href="/enero25/xmen98/tomas03.php">Meter Datos</a><br>
                </div>
            </li>
            <li class = "nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" style="color:white" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup = "true" aria-expanded = "false">
                Unidad 2
              </a>
                <!--Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre+el numero de la practica XX terminando con HTML-->
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/xmen98/tomas04.html">Practica Cuatro</a><br>
                  <a class="dropdown-item" href="/xmen98/tomas05.html">Practica Teienda</a><br>
                  <a class="dropdown-item" href="/xmen98/daniel01.html">Practica Cinco</a><br>
                  <a class="dropdown-item" href="/xmen98/tomas05a.html">Practica 5a</a><br>
                  <a class="dropdown-item" href="/xmen98/tomas06.html">Practica Seis</a><br>
                </div>
            </li>
            <li class = "nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" style="color:white" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup = "true" aria-expanded = "false">
                Unidad 3
              </a>
                <!--Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre+el numero de la practica XX terminando con HTML-->
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/tomas07.html">Practica Siete</a><br>
                  <a class="dropdown-item" href="/tomas08.html">Practica Ocho</a><br>
                  <a class="dropdown-item" href="/tomas09.html">Practica Nueve</a><br>
                  <a class="dropdown-item" href="/tomas10.html">Practica Final</a><br>
                </div>
            </li>
          </ul>
        </div>
       </div>
      </nav>

      <style>
        .container1{
         
          width:60%;
          padding:20px;
          border-radius:10px;
          box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        h1, h2{
          text-align: center;
          color: #ff79c6;
          margin-bottom: 15px;
          font-family: 'Diablo', sans-serif;
                                                
        }
        form{
          
          display: flex;
          flex-direction: column;
        }
        label{
          
          font-size: 16px;
          margin-bottom: 5px;
        }
        input[type = "text"]{
          padding:8px;
          margin-bottom:10px;
          border:none;
          border-radius:10px;
          font-size:16px;
          background-color:#44475a;
          color:#fff;

        }
        input[type = "submit"]{
          padding:10px;
          margin-bottom:10px;
          border:none;
          border-radius:10px;
          font-size:16px;
          background-color:#fa7b;
          color:#282a36;
          cursor:pointer;
          transition: background 0.3s;
        }
        input[type="submit"]:hover{
          background-color:#3ae374;
        }
      </style>
      <div class="container1" style=" max-width:600px; margin:auto;">
        <form method="POST" id="formulario">
            <label for="numero_control">Numero de control: </label>
            <input type="text" id="numero_control" name="numero_control" required></br>
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" required></br>
            <label for="apellido_paterno">Apellido Paterno: </label>
            <input type="text" id="apellido_paterno" name="apellido_paterno" required></br>
            <label for="apellido_materno">Apellido Materno: </label>
            <input type="text" id="apellido_materno" name="apellido_materno" required></br>
            
            
            <label for="edad">Edad: </label>
            <select name="edad" required>
                <option value = "">Seleccione una edad</option>
                <?php while ($row = $result_edad->fetch_assoc()){
                    echo "<option value = '" . $row["id"] . " '>" . $row["edad"] . "</option>";
                } ?>
            </select>
            <label for="colonia">Colonia: </label>
            <select name="colonia" required>
                <option value = "">Seleccione una colonia</option>
                <?php while ($row = $result_colonias->fetch_assoc()){
                    echo "<option value = '" . $row["id"] . " '>" . $row["nombre_colonias"] . "</option>";
                } ?>
            </select>
            <label for="especialidad">Especialidad: </label>
            <select name="especialidad" required>
                <option value = "">Seleccione una especialidad</option>
                <?php while ($row = $result_especialidad->fetch_assoc()){
                    echo "<option value = '" . $row["id"] . " '>" . $row["nombre_especialidad"] . "</option>";
                } ?>
            </select>
            <label for="genero">Genero: </label>
            <select name="genero" required>
                <option value = "">Seleccione un Genere</option>
                <?php while ($row = $result_genero->fetch_assoc()){
                    echo "<option value = '" . $row["id"] . " '>" . $row["nombre_genero"] . "</option>";
                } ?>
            </select>

            <label for="correo">Correo: </label>
            <input type="email" id="correo" name="correo" required></br>
            <label for="telefono">Telefono: </label>
            <input type="text" id="telefono" name="telefono" required></br>
            <label for="fecha_ingreso">Fecha de Ingreso: </label>
            <input type="date" id="fecha_ingreso" name="fecha_ingreso" required></br>
        <input type="submit" value="Agregar alumno">
        </form>
      </div>
<h2>Lista de alumnos</h2>
<table border="1">
  <tr>
    <th>Numero de Control</th>
    <th>Nombre</th>
    <th>Apellido Paterno</th>
    <th>Apellido Materno</th>
    <th>Edad</th>
    <th>Colonia</th>
    <th>Especialidad</th>
    <th>Genero</th>
    <th>Correo</th>
    <th>Telefono</th>
    <th>Fecha de Ingreso</th>
  </tr>
  <?php
  $sql= "SELECT 
                a.numero_control,
                a.nombre,
                a.apellido_paterno,
                a.apellido_materno,
                e.edad,
                c.nombre_colonias,
                es.nombre_especialidad,
                g.nombre_genero,
                a.correo,
                a.telefono,
                a.fecha_ingreso
                FROM alumnos a
                JOIN edades e ON a.id_edad = e.id 
                JOIN colonias c ON a.id_colonia = c.id
                JOIN especialidades es ON a.id_especialidad = es.id
                JOIN generos g ON a.id_genero = g.id";
                $resultado = $conexion->query($sql);
                if($resultado->num_rows >0){
                  while ($row = $resultado -> fetch_assoc()){
                          echo "<tr>
                          <td>{$row['numero_control']}</td>
                          <td>{$row['nombre']}</td>
                          <td>{$row['apellido_paterno']}</td>
                          <td>{$row['apellido_materno']}</td>
                          <td>{$row['edad']}</td>
                          <td>{$row['nombre_colonias']}</td>
                          <td>{$row['nombre_especialidad']}</td>
                          <td>{$row['nombre_genero']}</td>
                          <td>{$row['correo']}</td>
                          <td>{$row['telefono']}</td>
                          <td>{$row['fecha_ingreso']}</td>
                          </tr>";
                      }
                   } else {
                       echo "<tr><td colspan='11'>No hay alumnos registrados</td></tr>";
                   }
  ?>
</table>

</body>
</html>