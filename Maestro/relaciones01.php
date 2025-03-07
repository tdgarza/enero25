<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/so-this-is-it" rel="stylesheet">
    
    <title>Mostrar Alumnos</title>
</head>
<body>

    <nav class="navbar navbar-light" style="background-color: #1b0a43;">
        <div class="container">
            <a class="navbar-brand" href="index.html" style="color:white;">INICIO</a>
        </div>
    </nav>
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
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4 text-center" style="color: #1E2D24; font-family: 'so this is it', sans-serif; text-shadow: 0 1px 1px black;">
                Datos de los Alumnos
            </h1>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Número de Control</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Edad</th>
                    <th>Colonia</th>
                    <th>Especialidad</th>
                    <th>Género</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Fecha de Ingreso</th>
                </tr>
            </thead>
            <tbody>
                <?php
                error_reporting(E_ALL);
                ini_set('display_errors', 1);

                // Conexión a la base de datos
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "escuela";

                $conexion = new mysqli($servername, $username, $password, $database);

                // Verificar conexión
                if ($conexion->connect_error) {
                    die("Error de conexión: " . $conexion->connect_error);
                }

                // Consulta SQL con JOINs para obtener los datos completos
                $sql = "SELECT 
                            A.numero_control, 
                            A.nombre, 
                            A.apellido_paterno, 
                            A.apellido_materno, 
                            E.edad, 
                            C.nombre_colonias, 
                            ES.nombre_especialidad, 
                            G.nombre_genero, 
                            A.correo, 
                            A.telefono, 
                            A.fecha_ingreso
                        FROM alumnos A
                        JOIN edades E ON A.id_edad = E.id
                        JOIN colonias C ON A.id_colonia = C.id
                        JOIN especialidades ES ON A.id_especialidad = ES.id
                        JOIN generos G ON A.id_genero = G.id";

                $resultado = $conexion->query($sql);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
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
                    echo "<tr><td colspan='11' class='text-center'>No hay registros en la base de datos</td></tr>";
                }

                // Cerrar conexión
                $conexion->close();
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
