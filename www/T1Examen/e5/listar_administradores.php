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
    <br>
    <h1>Gestión donacion de Sangre</h1>
    <div>
      <h3>   <b> Listado de administradores  </b>   </h3> 
    </div>

    <?php



    try {
  
        require("lib/base_datos.php");
        $conexion = get_conexion();
        seleccionar_bd_donacion($conexion);

        $stmt = $conexion->prepare("SELECT * FROM administradores");
        $stmt->execute();

        // Obtener todos los resultados como un array asociativo
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Generamos la tabla
        echo "<table class='table'>";
        echo "<tr><th>Nombre</th><th>Contrasinal</th><th>Eliminar</th></tr>";

        foreach ($resultado as $columna) {
            echo "<tr>";
            
            echo "<td>" . $columna['nombre'] . "</td>";
            echo "<td>" . $columna['contrasinal'] . "</td>";
            echo "<td><a class='btn btn-primary' href='borrar_adminitrador.php?id=" . $columna['nombre'] . "'>Eliminar Adminitrador</a></td>";
            echo "</tr>";
        }

        echo "</table>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null; // Cerramos la conexión

    ?>

    <footer>
        <p><a href='index.php'>Página de inicio</a></p>
    </footer>

</body>

</html>