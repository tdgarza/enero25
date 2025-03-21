<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$database = "escuela";

$conexion = new mysqli($servername, $username, $password, $database);
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener datos para los dropdowns
$sql_edad = "SELECT id, edad FROM edades";
$sql_colonias = "SELECT id, nombre_colonias FROM colonias";
$sql_especialidades = "SELECT id, nombre_especialidad FROM especialidades";
$sql_generos = "SELECT id, nombre_genero FROM generos";

$result_edad = $conexion->query($sql_edad);
$result_colonias = $conexion->query($sql_colonias);
$result_especialidades = $conexion->query($sql_especialidades);
$result_generos = $conexion->query($sql_generos);

// Insertar alumno
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero_control = $conexion->real_escape_string($_POST["numero_control"]);
    $nombre = $conexion->real_escape_string($_POST["nombre"]);
    $apellido_paterno = $conexion->real_escape_string($_POST["apellido_paterno"]);
    $apellido_materno = $conexion->real_escape_string($_POST["apellido_materno"]);
    $id_edad = $conexion->real_escape_string($_POST["edad"]);
    $id_colonia = $conexion->real_escape_string($_POST["colonia"]);
    $id_especialidad = $conexion->real_escape_string($_POST["especialidad"]);
    $id_genero = $conexion->real_escape_string($_POST["genero"]);
    $correo = $conexion->real_escape_string($_POST["correo"]);
    $telefono = $conexion->real_escape_string($_POST["telefono"]);
    $fecha_ingreso = $conexion->real_escape_string($_POST["fecha_ingreso"]);
    
    $sql_insert = "INSERT INTO alumnos (numero_control, nombre, apellido_paterno, apellido_materno, id_edad, id_colonia, id_especialidad, id_genero, correo, telefono, fecha_ingreso) 
                   VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno', '$id_edad', '$id_colonia', '$id_especialidad', '$id_genero', '$correo', '$telefono', '$fecha_ingreso')";
    
    if ($conexion->query($sql_insert) === TRUE) {
        echo "<p class='success'>Nuevo alumno agregado con éxito.</p>";
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "<p class='error'>Error: " . $conexion->error . "</p>";
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Alumnos</title>
</head>
<body>
    <h2>Registrar Alumno</h2>
    <form method="POST">
        <label>Número de Control:</label>
        <input type="text" name="numero_control" required><br><br>
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br><br>
        <label>Apellido Paterno:</label>
        <input type="text" name="apellido_paterno" required><br><br>
        <label>Apellido Materno:</label>
        <input type="text" name="apellido_materno" required><br><br>

        <label>Edad:</label>
       
        <select name="edad" required>
            <option value="">Seleccione una edad</option>
            <?php while ($row = $result_edad->fetch_assoc()) {
                echo "<option value='" . $row["id"] . "'>" . $row["edad"] . "</option>";
            } ?>
            </select><br><br>
        <label>Colonia:</label>
        <select name="colonia" required>
            <option value="">Seleccione una colonia</option>
            <?php while ($row = $result_colonias->fetch_assoc()) {
                echo "<option value='" . $row["id"] . "'>" . $row["nombre_colonias"] . "</option>";
            } ?>
        </select><br><br>
        <label>Especialidad:</label>
        <select name="especialidad" required>
            <option value="">Seleccione una especialidad</option>
            <?php while ($row = $result_especialidades->fetch_assoc()) {
                echo "<option value='" . $row["id"] . "'>" . $row["nombre_especialidad"] . "</option>";
            } ?>
        </select><br><br>
        <label>Género:</label>
        <select name="genero" required>
            <option value="">Seleccione un género</option>
            <?php while ($row = $result_generos->fetch_assoc()) {
                echo "<option value='" . $row["id"] . "'>" . $row["nombre_genero"] . "</option>";
            } ?>
        </select><br><br>
        <label>Correo:</label>
        <input type="email" name="correo" required><br><br>
        <label>Teléfono:</label>
        <input type="text" name="telefono" required><br><br>
        <label>Fecha de Ingreso:</label>
        <input type="date" name="fecha_ingreso" required><br><br>
        <input type="submit" value="Agregar Alumno">
    </form>

    <h2>Lista de Alumnos</h2>
    <table border="1">
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
        
$sql = "SELECT 
                a.numero_control,
                a.nombre,
                a.apellido_paterno,
                a.apellido_materno,
                e.edad,
                c.nombre_colonias,
                es.nombre_especialidad,
                g.nombre_genero,
                a.correo,
                a.telefono,
                a.fecha_ingreso 
                FROM alumnos a
                JOIN edades e ON a.id_edad = e.id
                JOIN colonias c ON a.id_colonia = c.id
                JOIN especialidades es ON a.id_especialidad = es.id
                JOIN generos g ON a.id_genero = g.id";
                // edades, colonias, especialidades, generos es el nombre de la tabla, lo de id_edad, colonia, especialidad, genero, es el nombre de la columna
       $resultado = $conexion->query($sql);

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
            echo "<tr><td colspan='11'>No hay alumnos registrados</td></tr>";
        }
        ?>
    </table>
</body>
</html>
<?php
$conexion->close();
?>
