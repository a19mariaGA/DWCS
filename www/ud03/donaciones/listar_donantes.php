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
      <h3>   <b> Listado de donantes   </b>   </h3> 
    </div>

    <?php



    try {
  
        require("lib/utilidades.php");
        $conn = conectar();

        $stmt = $conn->prepare("SELECT * FROM donantes");
        $stmt->execute();

        // Obtener todos los resultados como un array asociativo
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Generamos la tabla
        echo "<table class='table'>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Apellidos</th><th>Edad</th><th>Grupo Sanguineo</th><th>Codigo Postal</th><th>Movil</th><th>Registrar donación</th><th>Lista de donaciones</th><th>Eliminar</th></tr>";

        foreach ($resultado as $columna) {
            echo "<tr>";
            echo "<td>" . $columna['id'] . "</td>";
            echo "<td>" . $columna['Nombre'] . "</td>";
            echo "<td>" . $columna['Apellidos'] . "</td>";
            echo "<td>" . $columna['Edad'] . "</td>";
            echo "<td>" . $columna['GrupoSanguineo'] . "</td>";
            echo "<td>" . $columna['CodigoPostal'] . "</td>";
            echo "<td>" . $columna['TelefonoMovil'] . "</td>";
            echo "<td><a class='btn btn-primary' href='donar.php?id=" . $columna['id'] . "'>Registrar donación</a></td>";
            echo "<td><a class='btn btn-primary' href='listar_donaciones.php?id=" . $columna['id'] . "'>Lista de donaciones</a></td>";
            echo "<td><a class='btn btn-primary' href='borrar_donante.php?id=" . $columna['id'] . "'>Eliminar donante</a></td>";
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