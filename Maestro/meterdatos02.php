<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Insertar y Mostrar Datos</title>
</head>
<body>
    <div class="container">
        <h1>Insertar Valores</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="formulario">
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellido">Apellido: </label>
            <input type="text" id="apellido" name="apellido" required>

            <label for="nacimiento">Nacimiento: </label>
            <input type="date" id="nacimiento" name="nacimiento" required>  

            <input type="submit" value="Agregar registro"> 
        </form>

        <?php
        // Configuración de la conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "lunes";

        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("La conexión a la base de datos falló: " . $conn->connect_error);
        }

        // Insertar datos si el formulario fue enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $nacimiento = $_POST["nacimiento"];

            $sql = "INSERT INTO martes (nombre, apellido, nacimiento) VALUES ('$nombre', '$apellido', '$nacimiento')";
            if ($conn->query($sql) === TRUE) {
                echo "<p class='success'>Nueva persona agregada con éxito.</p>";
            } else {
                echo "<p class='error'>Error al agregar la persona: " . $conn->error . "</p>";
            }
        }

        // Mostrar los datos en una tabla
        $sql = "SELECT * FROM martes ORDER BY id DESC";
        $resultado = $conn->query($sql);
        ?>

        <h2>Registros Ingresados</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Nacimiento</th>
            </tr>
            <?php
            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $fila['id'] . "</td>
                            <td>" . $fila['nombre'] . "</td>
                            <td>" . $fila['apellido'] . "</td>
                            <td>" . $fila['nacimiento'] . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No hay registros aún.</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
