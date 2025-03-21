<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    $username = "root";
    $password = "";
    $servername = "localhost";
    $database = "tdgm";
    $conexion = new mysqli($servername, $username, $password, $database);
            
    if($conexion->connect_error){
        die("La conexion fallo: " . $conexion->connect_error);
         }
//estas lineas van a "analizar" si el formulario se envio primeramente
    if($_SERVER["REQUEST_METHOD"] =="POST"){
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $id_categoria = $_POST["categoria"];
        
        $sql = "INSERT INTO productos (nombre, precio, id_categoria) VALUES ('$nombre', '$precio', '$id_categoria')";
        if($conexion->query($sql)===TRUE){
            echo "<p style='color: green';>Producto agregado correctamente</p>";
        }else{
            echo "<p style='color: red';>Error: " . $conexion->error . "</p>;";
        }
    }
    //obtener categorias para sacar la informacion de la base de datos para el dropdown con la informacion que se solicita, esto es lo que nos hace falta en la pagina anterior.
    $sql_categorias = "SELECT * FROM categorias"; //categorias es una tabla que hare despues.
    $result_categorias = $conexion->query($sql_categorias);
?>

<html>
    <head>
        <title>Pagina alterna de prueba</title>
    </head>
    <body>
        <h1>Registrar Productos</h1>
        <form method = "POST">
            <label>Nombre del producto: </label>
            <input type="text" name="nombre" required><br><br>
            <label>Precio: </label>
            <input type="number" name="precio" required><br><br>
            <label>Categoria: </label>
            <select name ="categoria" requiered>
                <option value="">Seleccionar una categoria</option>
                <?php
                if($result_categorias->num_rows > 0){
                    while($row = $result_categorias->fetch_assoc()){
                        echo "<option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
                    }
                }
                ?>
            </select><br><br>

        </form>
    </body>
</html>