<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["nombre"])) {
    $nombre = $_GET["nombre"];

    // Eliminar donante y sus donaciones
    try {

        include "lib/base_datos.php";
        include "lib/utilidades.php";
        
        $conexion = get_conexion();
        seleccionar_bd_donacion($conexion);
        


        // Eliminar donaciones del historico
        $sql = "DELETE FROM administradores WHERE nombre  = $nombre";
        $conexion->exec($sql);

       

        echo "<h2> <b> Administrador eliminado correctamente <b> </h2>  </br> </br> ";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
}
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donación Sangre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
 
    <footer>
        <p><a href='index.php'>Página de inicio</a></p>
    </footer>

</body>


</html>