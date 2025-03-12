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
                
    
    <title>Mostrar Datos Relacionados</title>
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
      <table class="table table-bordered">
        <thead>
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

        </thead>
        <tbody>
      <?php
      //Estas dos lineas me dicen que errores tengo
      error_reporting(E_ALL);
      ini_set('display_errors', 1);
        //estas lineas siempre estaran presentes, ya que me conectan al servidor
    $username = "root";
    $password = "";
    $servername = "localhost";
    $database = "cetis131";
        $conexion = new mysqli($servername, $username, $password, $database);
         if($conexion->connect_error){
                die("La conexion fallo: " . $conexion->connect_error);
            }
            
         
        //Mostrar los datos de la tabla
        $sql = "SELECT 
                        a.numero_control,
                        a.nombre,
                        a.apellido_paterno,
                        a.apellido_materno,
                        e.edad,
                        c.colonia,
                        es.especialidad,
                        g.genero,
                        a.correo,
                        a.telefono,
                        a.fecha_ingreso
                        FROM alumnos a
                        JOIN edades e ON a.id_edad = e.id
                        JOIN colonias c ON a.id_colonia = c.id
                        JOIN especialidades es ON a.id_especialidad = es.id
                        JOIN generos g ON a.id_genero = g.id";
        $resultado = $conexion->query($sql);
        if ($resultado->num_rows > 0) {
             while ($row = $resultado->fetch_assoc()) {
                echo "<tr>
                            <td>{$row['numero_control']}</td>
                            <td>{$row['nombre']}</td>
                            <td>{$row['apellido_paterno']}</td>
                            <td>{$row['apellido_materno']}</td>
                            <td>{$row['edad']}</td>
                            <td>{$row['colonia']}</td>
                            <td>{$row['especialidad']}</td>
                            <td>{$row['genero']}</td>
                            <td>{$row['correo']}</td>
                            <td>{$row['telefono']}</td>
                            <td>{$row['fecha_ingreso']}</td>
                </tr>";
            }
        } else {
            echo "<p>No se encontraron registros en la base de datos.</p>";
        }
        $conexion->close();
?>
    </tbody>
    </table>
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