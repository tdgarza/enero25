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
<?php
// Mostrar todos los errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "xmen";

$conexion = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conexion->connect_errno > 0) {
    die('Error: No es posible establecer la conexión: [' . $conexion->connect_error . ']');
}

// Verificar si se recibió el ID por POST
if (isset($_POST['id'])) {
    $id = $conexion->real_escape_string($_POST['id']);

    // Consulta para obtener los datos del personaje
    $extraerdato = $conexion->query("SELECT * FROM mutantes WHERE id = $id");

    if ($extraerdato && $extraerdato->num_rows > 0) {
        $fetch = $extraerdato->fetch_assoc();

        $nombre             = $fetch['nombre'];
        $nombrereal         = $fetch['nombrereal'];
        $poderes            = $fetch['poderes'];
        $primeraaparicion   = $fetch['primeraaparicion'];
        $bio                = $fetch['bio'];
        $imagen             = base64_encode($fetch['imagen']);
    } else {
        echo "<p>No se encontró el personaje con el ID proporcionado.</p>";
        exit;
    }
} else {
    echo "<p>No se recibió un ID válido.</p>";
    exit;
}
?>

<div class="personajes">
    <div class="nombre">Nombre Clave: <?php echo $nombre = $fetch['nombre']; ?><br></div><br>
    <div class="nombre">Nombre Real: <?php echo $nombrereal = $fetch['nombrereal']; ?><br></div><br>
    <div class="nombre">Poderes: <?php echo $poderes = $fetch['poderes']; ?><br></div><br>
    <div class="nombre">Primera Aparicion: <?php echo $primeraaparicion = $fetch['primeraaparicion']; ?>
    <br></div><br>
    <div class="nombre">Biografia: <?php echo $bio = $fetch['bio']; ?><br></div><br>
    <div class="foto">
        <img class="crop" src="data:image/jpeg;base64,<?php echo base64_encode($fetch['imagen']); ?>">
</div>
</body>
</html>
