<?php
ob_start();

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
        echo "<p style='color:green;'>Nuevo alumno agregado con éxito.</p>";
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "<p style='color:red;'>Error al agregar al alumno: " . $conexion->error . "</p>";
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
    <link href="https://fonts.cdnfonts.com/css/so-this-is-it" rel="stylesheet">
    <title>RELACIONES</title>
</head>
<body>
    <div class="container1" style="max-width:600px; margin:auto;">
        <form method="POST" id="formulario">
            <label for="numero_control">Número de Control: </label>
            <input type="text" id="numero_control" name="numero_control" required><br>
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" required><br>
            <label for="apellido_paterno">Apellido Paterno: </label>
            <input type="text" id="apellido_paterno" name="apellido_paterno" required><br>
            <label for="apellido_materno">Apellido Materno: </label>
            <input type="text" id="apellido_materno" name="apellido_materno" required><br>
            <label for="edad">Edad: </label>
            <input type="text" id="edad" name="edad" required><br>
            <label for="colonia">Colonia: </label>
            <input type="text" id="colonia" name="colonia" required><br>
            <label for="especialidad">Especialidad: </label>
            <input type="text" id="especialidad" name="especialidad" required><br>
            <label for="genero">Género: </label>
            <input type="text" id="genero" name="genero" required><br>
            <label for="correo">Correo Electrónico: </label>
            <input type="email" id="correo" name="correo" required><br>
            <label for="telefono">Teléfono: </label>
            <input type="text" id="telefono" name="telefono" required><br>
            <label for="fecha_ingreso">Fecha de Ingreso: </label>
            <input type="date" id="fecha_ingreso" name="fecha_ingreso" required><br>
            <input type="submit" value="Agregar Registro">
        </form>
    </div>

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

    <?php $conexion->close(); ?>
</body>
</html>