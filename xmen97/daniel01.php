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
    <style>
    h1{
        font-size:12px;
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
  <style>
    .container1{
      justify-content:center;
      align-items:center;
      width:50%;
      background-color:#282a36;
      padding: 20px;
      border-radius:10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      color:white;
    }
    h1, h2{
      font-family: 'so this is it', sans-serif; 
      text-shadow: 0 1 1 black;
      text-align:center;
      color:#ff79c6;
      margin-bottom:15px;
      font-size:15px;
    }
    form{
      display:flex;
      flex-direction:column;
    }
    label{
      font-size:16px;
      margin-bottom:5px;
    }
    input[type="text"] {
    padding: 8px;
    margin-bottom: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    background-color: #44475a;
    color: #fff;
}
input[type="submit"] {
    padding: 10px;
    background-color: #50fa7b;
    border: none;
    color: #282a36;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
}
input[type="submit"]:hover {
    background-color: #3ae374;
}
  </style>
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
            <input type="submit" value="Agregar producto">
        </form>
        <h2>Lista de Productos</h2>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categoria</th>
            </tr>
            <?php
            $sql_productos = "SELECT productos.nombre, productos.precio, categorias.nombre AS categoria 
            FROM productos 
            JOIN categorias ON productos.id_categoria = categorias.id";
            
            $result_productos = $conexion->query($sql_productos);
            if($result_productos->num_rows>0){
                while($row = $result_productos -> fetch_assoc()){
                    echo "<tr>
                        <th>{$row['nombre']}</th>
                        <th>{$row['precio']}</th>
                        <th>{$row['categoria']}</th>
                    
                    </tr>";
                }
            }else{
                echo "<tr><td>No hay productos registrados</td></tr>";
            }
            ?>
        </table>
    </body>
</html>