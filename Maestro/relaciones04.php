<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Tienda";

// Conectar a MySQL
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Procesar formulario si se envió
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $id_categoria = $_POST["categoria"];

    $sql = "INSERT INTO Productos (nombre, precio, id_categoria) VALUES ('$nombre', '$precio', '$id_categoria')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>Producto agregado con éxito.</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
}

// Obtener categorías para el dropdown
$sql_categorias = "SELECT * FROM Categorias";
$result_categorias = $conn->query($sql_categorias);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Agregar Producto</title>
</head>
<body>
    <h2>Registrar Producto</h2>
    <form method="POST">
        <label>Nombre del Producto:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Precio:</label>
        <input type="number" name="precio" step="0.01" required><br><br>

        <label>Categoría:</label>
        <select name="categoria" required>
            <option value="">Seleccione una categoría</option>
            <?php
            if ($result_categorias->num_rows > 0) {
                while ($row = $result_categorias->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
                }
            }
            ?>
        </select><br><br>

        <input type="submit" value="Agregar Producto">
    </form>

    <h2>Lista de Productos</h2>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Categoría</th>
        </tr>
        <?php
        $sql_productos = "SELECT Productos.nombre, Productos.precio, Categorias.nombre AS categoria
                          FROM Productos
                          JOIN Categorias ON Productos.id_categoria = Categorias.id";
        $result_productos = $conn->query($sql_productos);

        if ($result_productos->num_rows > 0) {
            while ($row = $result_productos->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['nombre']}</td>
                        <td>\${$row['precio']}</td>
                        <td>{$row['categoria']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No hay productos registrados</td></tr>";
        }
        ?>
    </table>

</body>
</html>

<?php
$conn->close();
?>
