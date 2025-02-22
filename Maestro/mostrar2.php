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
    <title>Pagina de Analisis Numerico</title>
</head>
<body>
<!--Todo esto son los botones -->
  <div style="margin: 5px;">
    <nav class="navbar navbar-light" style="background-color: #9bc6e5;">

    <div class="container">
    <a class="navbar-brand" href="#">Inicio</a>
  
    <div class="collapse navbar-collapse" id="navbarNavDropdown">

      <ul class="nav navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Unidad 2
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="/milestone/electronica/bisecciones.html">Metodo de la Biseccion</a><br>
              <a class="dropdown-item" href="/milestone/electronica/reglafalsa.html">Regla Falsa</a><br>
              <a class="dropdown-item" href="/milestone/electronica/metodonewton.html">Metodo de Newton</a><br>
              <a class="dropdown-item" href="/">Metodo de la Secante</a><br>

            </div>
          </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Unidad 3
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="interpolacionlineal.html">Interpolacion Lineal</a><br>
            <a class="dropdown-item" href="lagrange.html">Interpolacion de Lagrange</a><br>
            <a class="dropdown-item" href="interpolacionnewton.html">Interpolacion Newton</a><br>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Unidad 4
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="newtoncoates.html">Integracion Newton-Coates</a><br>
            <a class="dropdown-item" href="reglatrapecio.html">Regla Trapecial</a><br>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Unidad 5
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="gauss.html">Eliminacion Gaussiana</a><br>
            <a class="dropdown-item" href="gaussjordan.html">Gauss-Jordan</a><br>
            <a class="dropdown-item" href="seidel.html">Gauss-Seidel</a><br>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Unidad 6
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="gaussseidel.html">Gauss-Seidel</a><br>
            <a class="dropdown-item" href="newtonraphson.html">Newton-Raphson</a><br>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Unidad 7
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="euler.html">Metodo de Euler</a><br>
            <a class="dropdown-item" href="runge.html">Metodo de Runge Kutta</a><br>
            <a class="dropdown-item" href="dosecuaciones.html">Sistema de dos Ecuaciones</a><br>
          </div>
        </li>
      </ul>
    </div>
    </div>
  </nav>
</div>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
    
    <h1>Mostrar datos</h1>
    <?php
    $username = "root";
    $password = "";
    $servername = "localhost";
    $database = "torresgemelas";
    //crear conexion
    $conexion = new mysqli($servername, $username, $password, $database);
    //Verificar la conexion
    if($conexion->connect_error){
        die("Conexion fallida: " . $conexion->connect_error);
        }
    $sql = "SELECT * FROM jugadores";
    $resultado = $conexion->query($sql);

    if($resultado->num_rows >0){
        echo "<table>";
        echo "<tr><th>Id</th><th>Nombre</th><th>Apodo</th><th>Equipo</th><th>Posicion</th><th>Altura</th><th>Peso</th><th>Numero</th><th>Edad</th><th>Nacionalidad</th><th>Puntos</th></tr>";
        while($row = $resultado->fetch_assoc()){
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["apodo"] . "</td><td>" . $row["equipo"] ."</td><td>" . $row["posicion"] . "</td><td>" . $row["altura"] . "</td><td>" . $row["peso"] . "</td><td>" . $row["numero"] . "</td><td>" . $row["edad"] . "</td><td>" . $row["nacionalidad"] . "</td><td>" . $row["puntos"] . "</td></tr>";
        }
        echo "</table>";
        }else{
        echo "No se encontraron registros en la base de datos";
        }
        $conexion->close();
    ?>
</div>
  </div>
<!--hasta aqui son los botones  esto lo voy a copiar en todas las paginas para que quede igual-->

  <!--Esto lo baje de bootstrap para poner un cuadro donde pongo la informacion-->
<div class="container">
    <div class="row">
    <div class="col-sm-2">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/milestone/metodos.jpg" style="height:150px; width: 180px;" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title" style="font-weight: bold;">Introducción a los métodos numéricos</h5>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
<!--Aqui acaba-->

<div class="row">
    <div class="col-sm-2">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/milestone/02.jpg" style="height:150px; width: 180px;" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title" style="font-weight: bold;">Solución de ecuaciones no lineales de una variable</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-sm-2">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/milestone/03.jpg" style="height:150px; width: 180px;" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title" style="font-weight: bold;">Solución de sistemas de ecuaciones lineales algebraicas en la resolución de problemas de ingeniería.</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-sm-2">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/milestone/Integral_example.png" style="height:150px; width: 180px;" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title" style="font-weight: bold;">Integración numérica</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-sm-2">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/milestone/04.jpg" style="height:150px; width: 180px;" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title" style="font-weight: bold;">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-sm-2">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/milestone/05.jpg" style="height:150px; width: 180px;" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
</div>

</body>
</html>