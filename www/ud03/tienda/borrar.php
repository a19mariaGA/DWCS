
<?php
    // Obtener conexión
    include("lib/utilidades.php");
    $conexion = conectar(); 

    // Leer el ID de $_GET
    $usuario_id = $_GET['id'];

    // realizamos el delete
    try {
        $stmt = $conexion->prepare("DELETE FROM usuarios WHERE id = :id");
        $stmt->bindParam(':id', $usuario_id);
        $stmt->execute();

        echo "<br><br><p><b>Usuario eliminado correctamente.</b></p><br><br>";
    } catch (PDOException $e) {
        echo "<br><br><p><b>Error al eliminar usuario: <br><br><p/></b> " . $e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda IES San Clemente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <footer>
        <p>
            <a href='index.php'>Página de inicio</a>
        </p>
    </footer>
</body>

</html>