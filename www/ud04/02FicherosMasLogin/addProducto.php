<?php



include('funciones.php');
include("lib/base_datos.php");
$conexion = get_conexion();
seleccionar_bd_tienda($conexion);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {


$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $unidades = $_POST['unidades'];
    $foto = $_FILES['foto'];

    if (!compruebaExtension($imageFileType)) {
        echo("Error: Solo se permiten imágenes con extensiones png, jpg, jpeg o gif.");
    } else if (!comprobarTamanho($foto['size'])) {
        echo("Error: La imagen no debe superar 50MB de tamaño.");
    } else {

 
                $rutaImagen = "uploads/" . uniqid() . "_" . $foto['name'];
                move_uploaded_file($foto['tmp_name'], $rutaImagen);


                if ($conexion->connect_error) {
                    die("Error de conexión a la base de datos: " . $conexion->connect_error);
                }

                $sql = "INSERT INTO productos (nombre, descripcion, precio, unidades, foto) VALUES (?, ?, ?, ?, ?)";
                $stmt = $conexion->prepare($sql);
                $stmt->bind_param("ssdds", $nombre, $descripcion, $precio, $unidades, $rutaImagen);
                $stmt->execute();
                $stmt->close();

                $conexion->close();

                echo "Producto guardado exitosamente.";
                

    }

   

} else {
    echo "Conexión realizada";
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Añadir Producto</title>
</head>
<body>

<h1>Añadir Nuevo Producto</h1>


<form  action="addProducto.php"  method="post" enctype="multipart/form-data">
    Nombre: <input type="text" name="nombre" required><br>
    Descripción: <textarea name="descripcion" required></textarea><br>
    Precio: <input type="number" step="0.01" name="precio" required><br>
    Unidades: <input type="number" name="unidades" required><br>
    Foto: <input type="file" name="foto" accept=".png, .jpg, .jpeg, .gif, .txt" required><br>
    <input type="submit" value="Añadir Producto" name="submit">
</form>
</body>
</html>

