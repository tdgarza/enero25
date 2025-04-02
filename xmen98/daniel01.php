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
                        $id_colores = $_POST["colores"];
                        $sql = "INSERT INTO productos (nombre, precio, id_categoria, id_colores) VALUES ('$nombre','$precio', '$id_categoria','$id_colores')";
                    if($conexion->query($sql)===TRUE){
                            echo "<p style='color:green;'>Producto agregado con éxito.</p>";
                        } else {
                            echo "<p style='color:red;'>Error: " . $conexion->error . "</p>";
                    }
                    }
                    //Esta parte siguiente es la que generara el dropdown menu para desplegar las opciones que vamos a meter a la base de datos
                    $sql_categorias = "SELECT * FROM categorias";
                    $result_categorias = $conexion->query($sql_categorias);

                    $sql_colores = "SELECT * FROM colores";
                    $result_colores = $conexion->query($sql_colores);
                ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Pagina de Prueba</title>
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
    
      width:80%;
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
      font-size:25px;
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
  <div class="container1">
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

        <label>Colores:</label>
                        <select name="colores" required>
                         <option value="">Seleccione un  color</option>
                    <?php
                         if ($result_colores->num_rows > 0) {
                              while ($row = $result_colores->fetch_assoc()) {
                             echo "<option value='" . $row["id"] . "'>" . $row["nombre_color"] . "</option>";
                             }
                        }
                        ?>
        </select><br><br>

        <input type="submit" value="Agregar Producto">
                    </form>
                    
                    <h2>Lista de productos</h2>
                    <table>
                      <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Categoria</th>
                        <th>Color</th>
                      </tr>
                      <?php
                       $sql_productos = "SELECT p.nombre, p.precio, ca.nombre AS categoria, co.nombre_color AS color
                  FROM productos p
                  JOIN categorias ca ON p.id_categoria = ca.id
                  JOIN colores co ON p.id_colores = co.id";
                      
                       $result_productos = $conexion->query($sql_productos);
                       if($result_categorias ->num_rows>0){
                        while($row = $result_productos->fetch_assoc()){
                          echo "<tr>
                            <td>{$row['nombre']}</td>
                            <td>{$row['precio']}</td>
                            <td>{$row['categoria']}</td>
                            <td>{$row['nombre_color']}</td>
                          </tr>";
                        }
                       }else{
                          echo "<tr><td>No hay productos registrados</td></tr>";
                       }
                      ?>
                    </table>
                    </div>
                </body>
                </html>
