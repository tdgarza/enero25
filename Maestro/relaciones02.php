<?php
ob_start();
?>
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
    <title>Registro de Alumnos</title>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: #1b0a43;">
        <div class="container">
            <a class="navbar-brand" href="index.html" style="color:white;">INICIO</a>
        </div>
    </nav>

    <div class="jumbotron">
        <h1 class="display-4 text-center" style="color: #1E2D24;">Registro de Alumnos</h1>
    </div>

    <div class="container">
        <h2 class="text-center">Agregar Nuevo Alumno</h2>
        <form method="POST" class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2" for="numero_control">Número de Control:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="numero_control" name="numero_control" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nombre">Nombre:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="apellido_paterno">Apellido Paterno:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="apellido_materno">Apellido Materno:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="edad">Edad:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="edad" name="edad" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="colonia">Colonia:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colonia" name="colonia" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="especialidad">Especialidad:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="especialidad" name="especialidad" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="genero">Género:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="genero" name="genero" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="correo">Correo:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="correo" name="correo" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="telefono">Teléfono:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="telefono" name="telefono" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="fecha_ingreso">Fecha de Ingreso:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Registrar Alumno</button>
                </div>
            </div>
        </form>
    </div>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "escuela";

    $conexion = new mysqli($servername, $username, $password, $database);

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    function insertarAlumno($conexion) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero_control = $conexion->real_escape_string($_POST['numero_control']);
            $nombre = $conexion->real_escape_string($_POST['nombre']);
            $apellido_paterno = $conexion->real_escape_string($_POST['apellido_paterno']);
            $apellido_materno = $conexion->real_escape_string($_POST['apellido_materno']);
            $edad = $conexion->real_escape_string($_POST['edad']);
            $colonia = $conexion->real_escape_string($_POST['colonia']);
            $especialidad = $conexion->real_escape_string($_POST['especialidad']);
            $genero = $conexion->real_escape_string($_POST['genero']);
            $correo = $conexion->real_escape_string($_POST['correo']);
            $telefono = $conexion->real_escape_string($_POST['telefono']);
            $fecha_ingreso = $conexion->real_escape_string($_POST['fecha_ingreso']);

            $sql = "INSERT INTO alumnos (numero_control, nombre, apellido_paterno, apellido_materno, edad, colonia, especialidad, genero, correo, telefono, fecha_ingreso)
                    VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno', '$edad', '$colonia', '$especialidad', '$genero', '$correo', '$telefono', '$fecha_ingreso')";

            if ($conexion->query($sql) === TRUE) {
                echo "<p class='alert alert-success text-center'>Alumno registrado exitosamente.</p>";
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            } else {
                echo "<p class='alert alert-danger text-center'>Error: " . $conexion->error . "</p>";
            }
        }
    }

    insertarAlumno($conexion);

    $sql = "SELECT * FROM alumnos";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<div class='container'><h2 class='text-center'>Lista de Alumnos</h2>";
        echo "<table class='table table-bordered'>";
        echo "<tr><th>Número de Control</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Edad</th><th>Colonia</th><th>Especialidad</th><th>Género</th><th>Correo</th><th>Teléfono</th><th>Fecha de Ingreso</th></tr>";
        while ($row = $resultado->fetch_assoc()) {
            echo "<tr><td>{$row['numero_control']}</td><td>{$row['nombre']}</td><td>{$row['apellido_paterno']}</td><td>{$row['apellido_materno']}</td><td>{$row['edad']}</td><td>{$row['colonia']}</td><td>{$row['especialidad']}</td><td>{$row['genero']}</td><td>{$row['correo']}</td><td>{$row['telefono']}</td><td>{$row['fecha_ingreso']}</td></tr>";
        }
        echo "</table></div>";
    } else {
        echo "<p class='text-center'>No hay alumnos registrados.</p>";
    }

    $conexion->close();
    ?>

</body>
</html>
