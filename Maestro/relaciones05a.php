<?php
ob_start(); // Para evitar errores de redirección

$servername = "localhost";
$username = "root";
$password = "";
$database = "escuela";

// Conectar a MySQL
$conexion = new mysqli($servername, $username, $password, $database);
if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

// Procesar formulario si se envió
$mensaje = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Consulta SQL para insertar los datos
    $sql = "INSERT INTO alumnos (numero_control, nombre, apellido_paterno, apellido_materno, edad, colonia, especialidad, genero, correo, telefono, fecha_ingreso) 
            VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno', '$edad', '$colonia', '$especialidad', '$genero', '$correo', '$telefono', '$fecha_ingreso')";

    if ($conexion->query($sql) === TRUE) {
        $mensaje = "<p style='color:green;'>Nuevo alumno agregado con éxito.</p>";
    } else {
        $mensaje = "<p style='color:red;'>Error al agregar al alumno: " . $conexion->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    
    <title>Registro de Alumnos</title>
</head>
<body>
    <div class="container">
        <h2>Registro de Alumnos</h2>
        <?php echo $mensaje; ?>
        <form method="POST" class="form-group">
            <label for="numero_control">Número de Control:</label>
            <input type="text" id="numero_control" name="numero_control" class="form-control" required>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>

            <label for="apellido_paterno">Apellido Paterno:</label>
            <input type="text" id="apellido_paterno" name="apellido_paterno" class="form-control" required>

            <label for="apellido_materno">Apellido Materno:</label>
            <input type="text" id="apellido_materno" name="apellido_materno" class="form-control">

            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" class="form-control" required>

            <label for="colonia">Colonia:</label>
            <input type="text" id="colonia" name="colonia" class="form-control">

            <label for="especialidad">Especialidad:</label>
            <select id="especialidad" name="especialidad" class="form-control" required>
                <option value="Programación">Programación</option>
                <option value="Redes">Redes</option>
                <option value="Administración">Administración</option>
            </select>

            <label for="genero">Género:</label>
            <select id="genero" name="genero" class="form-control" required>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Otro">Otro</option>
            </select>

            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" class="form-control" required>

            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" class="form-control">

            <label for="fecha_ingreso">Fecha de Ingreso:</label>
            <input type="date" id="fecha_ingreso" name="fecha_ingreso" class="form-control" required>

            <br>
            <input type="submit" value="Agregar Registro" class="btn btn-primary">
        </form>

        <h2>Lista de Alumnos</h2>
        <table class="table table-bordered">
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
            <?php
            $sql = "SELECT * FROM alumnos";
            $resultado = $conexion->query($sql);

            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["numero_control"] . "</td>
                            <td>" . $row["nombre"] . "</td>
                            <td>" . $row["apellido_paterno"] . "</td>
                            <td>" . $row["apellido_materno"] . "</td>
                            <td>" . $row["edad"] . "</td>
                            <td>" . $row["colonia"] . "</td>
                            <td>" . $row["especialidad"] . "</td>
                            <td>" . $row["genero"] . "</td>
                            <td>" . $row["correo"] . "</td>
                            <td>" . $row["telefono"] . "</td>
                            <td>" . $row["fecha_ingreso"] . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='11'>No se encontraron registros en la base de datos.</td></tr>";
            }
            ?>
        </table>
    </div>

    <?php $conexion->close(); ?>
</body>
</html>
