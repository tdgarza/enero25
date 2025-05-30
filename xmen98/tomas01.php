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
    <link rel="stylesheet" href="style.css">
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
      width: 100%;
      border-collapse: collapse;
      margin-top:50px;
      border-radius:5px solid #616;
    }
    th, td{
      padding: 10px;
      text-align; left;
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
    <div class="jumbotron">
        <h1 class="display-4" style="text-align: center; font-family: 'Diablo', sans-serif;color: red; text-shadow: 5px 5px 2px black;">MOSTRAR DATOS</h1>
      <?php
      $username = "root";
      $password = "";
      $servername = "localhost";
      $database = "sanvalentin1"; //aqui va su base de datos

      $conexion = new mysqli($servername, $username, $password, $database);
      if($conexion->connect_error){
        die("Conexion Fallida: " . $conexion->connect_error);
      } //hasta aqui es la conexion que siempre sera igual
      
      $sql = "SELECT * FROM nfleast"; //aqui agregan el nombre de la tabla que estan usando, en mi caso fue nfleast//
      $resultado = $conexion->query($sql);
      ?>
      <div class="container">

        <h1>TABLA DE RESULTADOS</h1>
        <?php if($resultado->num_rows >0): ?>
          <table>
            <tr>
              <th>Numero</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Apodo</th>
              <th>Peso</th>
              <th>Altura</th>
              <th>Posicion</th>
              <th>Universidad</th>
              <th>Equipo</th>
            </tr>
            <?php while ($fila = $resultado->fetch_assoc()): ?>
              <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><?php echo $fila['nombre']; ?></td>
                <td><?php echo $fila['apellido']; ?></td>
                <td><?php echo $fila['apodo']; ?></td>
                <td><?php echo $fila['peso']; ?></td>
                <td><?php echo $fila['altura']; ?></td>
                <td><?php echo $fila['posicion']; ?></td>
                <td><?php echo $fila['universidad']; ?></td>
                <td><?php echo $fila['equipo']; ?></td>
              </tr>
              <?php endwhile; ?>
          </table>
          <?php else: ?>
            <p>No se encontraron valores</p>
            <?php endif; ?>
      </div>
     
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