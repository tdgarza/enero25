<?php
    $username = "root";
    $password = "";
    $servername = "localhost";
    $database = "torresgemelas";
    // Crear conexión
    $conexion = new mysqli($servername, $username, $password, $database);
    // Verificar la conexión
    if($conexion->connect_error){
        die("Conexión fallida: " . $conexion->connect_error);
    }

    $sql = "SELECT * FROM jugadores";
    $resultado = $conexion->query($sql);
?>
<div class="container">
    <h1>Datos del jugador de la NBA</h1>
    <?php if($resultado->num_rows > 0): ?>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Apodo</th>
                <th>Equipo</th>
                <th>Posición</th>
                <th>Altura</th>
                <th>Peso</th>
                <th>Número</th>
                <th>Edad</th>
                <th>Nacionalidad</th>
                <th>Puntos</th>
            </tr>
            <?php while ($fila = $resultado->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td><?php echo $fila['apodo']; ?></td>
                    <td><?php echo $fila['equipo']; ?></td>
                    <td><?php echo $fila['posicion']; ?></td>
                    <td><?php echo $fila['altura']; ?></td>
                    <td><?php echo $fila['peso']; ?></td>
                    <td><?php echo $fila['numero']; ?></td>
                    <td><?php echo $fila['edad']; ?></td>
                    <td><?php echo $fila['nacionalidad']; ?></td>
                    <td><?php echo $fila['puntos']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>No se encontraron jugadores</p>
    <?php endif; ?>
</div>
<a href="index.php">REGRESAR</a>
