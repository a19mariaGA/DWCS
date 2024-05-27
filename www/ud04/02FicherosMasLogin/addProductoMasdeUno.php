<?php
include('funciones.php');
include("lib/base_datos.php");
$conexion = get_conexion();
seleccionar_bd_tienda($conexion);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

    $target_dir = "uploads/";
    $uploadOk = 1;

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $unidades = $_POST['unidades'];
    
    $num_files = count($_FILES['foto']['name']);

    for ($i = 0; $i < $num_files; $i++) {
        $foto = $_FILES['foto']['name'][$i];
        $tmp_name = $_FILES['foto']['tmp_name'][$i];
        $imageFileType = strtolower(pathinfo($foto, PATHINFO_EXTENSION));

        

        if (!compruebaExtension($imageFileType)) {
            echo("Error: Solo se permiten imágenes con extensiones png, jpg, jpeg o gif.");
            $uploadOk = 0;
            break;
        } else if (!comprobarTamanho($_FILES['foto']['size'][$i])) {
            echo("Error: La imagen no debe superar 50MB de tamaño.");
            $uploadOk = 0;
            break;
        } else {
            $rutaImagen = "uploads/" . uniqid() . "_" . $foto;
            move_uploaded_file($tmp_name, $rutaImagen);
        }
    }

    if ($uploadOk) {
        if ($conexion->connect_error) {
            die("Error de conexión a la base de datos: " . $conexion->connect_error);
        }

        $sql = "INSERT INTO productos (nombre, descripcion, precio, unidades, foto) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("ssdds", $nombre, $descripcion, $precio, $unidades, $rutaImagen);
        $stmt->execute();
        $stmt->close();

        $conexion->close();

        echo "Productos guardado exitosamente.";
        
        
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

<form action="addProductoMasdeUno.php" method="post" enctype="multipart/form-data">
    Nombre: <input type="text" name="nombre" required><br>
    Descripción: <textarea name="descripcion" required></textarea><br>
    Precio: <input type="number" step="0.01" name="precio" required><br>
    Unidades: <input type="number" name="unidades" required><br>
    Fotos: <input type="file" name="foto[]" accept=".png, .jpg, .jpeg, .gif" multiple required><br>
    
    <input type="submit" value="Añadir Producto" name="submit">
</form>
</body>
</html>
