            <?php
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            $username = "root";
            $password = "";
            $servername = "localhost";
            $database = "dgm";
                $conexion = new mysqli($servername, $username, $password, $database);
                if($conexion->connect_error){
                        die("La conexion fallo: " . $conexion->connect_error);
                    }
                    if($_SERVER["REQUEST_METHOD"]=="POST"){
                        $nombre = $_POST["nombre"];
                        $precio = $_POST["precio"];
                        $id_categoria = $_POST["categoria"];
                        $sql = "INSERT INTO productos (nombre, precio, id_categoria) VALUES ('$nombre','$precio', '$id_categoria')";
                    if($conexion->query($sql)===TRUE){
                            echo "<p style='color:green;'>Producto agregado con éxito.</p>";
                        } else {
                            echo "<p style='color:red;'>Error: " . $conexion->error . "</p>";
                    }
                    }
                    //Esta parte siguiente es la que generara el dropdown menu para desplegar las opciones que vamos a meter a la base de datos
                    $sql_categorias = "SELECT * FROM categorias";
                    $result_categorias = $conexion->query($sql_categorias);
                ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Pagina de Prueba</title>
                </head>
                <body>
                    <h2>Registrar productos</h2>
                    <form method="POST">
                        <label>Nombre del producto:</label>
                        <input type="text" name="nombre" required><br><br>
                        <label>Precio: </label>
                        <input type="number" name="precio" required><br><br>
                        
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
                    
                </body>
                </html>
