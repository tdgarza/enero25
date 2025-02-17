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
<?php
    $username = "root";
    $password = "";
    $servername = "localhost";
    $database = "marvel";
        $conexion = new mysqli($servername, $username, $password, $database);
         if($conexion->connect_error){
                die("La conexion fallo: " . $conexion->connect_error);
            }
            $sql = "SELECT * FROM Personajes";
            $resultado = $conexion->query($sql);
?>
        <div class="container">
         <h1>Datos de la tabla de personajes</h1>   
        
        <?php if($resultado->num_rows >0):?>
            <table>
                <tr>
                <th>Identificacion</th>
                <th>Nombre Real</th>
                <th>Nombre de Superheroe</th>
                <th>Poderes</th>
                <th>Debilidades</th>
               
                </tr>
                <?php while ($fila = $resultado->fetch_assoc()):  ?>
                <tr>
                    <td><?php echo $fila['PersonajeID']; ?></td>
                    <td><?php echo $fila['Nombre']; ?></td>
                    <td><?php echo $fila['Alias']; ?></td>
                    <td><?php echo $fila['FechaDeCreacion']; ?></td>
                    <td><?php echo $fila['Descripcion']; ?></td>
                </tr>
                <?php endwhile; ?>
            </table>
            <?php else: ?>
              <p>No se encontraron los personajes</p>
              <?php endif; ?>
        
        </div>
</div>

</body>
</html>