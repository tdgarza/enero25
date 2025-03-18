<?php
ob_start(); // Iniciar buffer de salida
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
                  <a class="dropdown-item" href="/tomas04.html">Practica Cuatro</a><br>
                  <a class="dropdown-item" href="/tomas05.html">Practica Cinco</a><br>
                  <a class="dropdown-item" href="/tomas06.html">Practica Seis</a><br>
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
            <input type="text" id="numero_control" name="numero_contro" required></br>
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
            <label for="correo">Correo: </label>
            <input type="email" id="correo" name="correo" required></br>
            <label for="telefono">Telefono: </label>
            <input type="text" id="telefono" name="telefono" required></br>
            <label for="fecha_ingreso">Fecha de Ingreso: </label>
            <input type="text" id="fecha_ingreso" name="fecha_ingreso" required></br>
        <input type="submit" value="Agregar alumno">
        </form>
      </div>

      <?php
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            $username = "root";
            $password = "";
            $servername = "localhost";
            $database = "cetis131";
                $conexion = new mysqli($servername, $username, $password, $database);
                if($conexion->connect_error){
                        die("La conexion fallo: " . $conexion->connect_error);
                    }

            function insertarAlumno($conexion){
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
                }
            }
        $conexion->close();
?>
</div>
    

      <div class="row" style="left:20px">
        <div class="col-sm-2">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
          <div class="card-header">Practica 1</div>
          <div class="card-body">
            <h5 class="card-title">mySQL</h5>
            <p class="card-text">Primera practica para demostrar lo aprendido en mySQL.</p>
          </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-2">
            <div class="card border-success mb-3" style="max-width: 18rem;">
              <div class="card-header">Header</div>
              <div class="card-body text-success">
                <h5 class="card-title">Success card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            </div>
          
         
          <div class="row">
            <div class="col-sm-2">
              <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Info card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              </div>
             
            
              <div class="row">
                <div class="col-sm-2">
              <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Danger card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
          

              <div class="row">
                <div class="col-sm-2">
              <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Warning card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
          </div>
             
     
    
</body>
</html>