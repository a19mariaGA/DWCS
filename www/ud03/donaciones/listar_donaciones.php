<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id_donante = $_GET["id"];

    try {
        require("lib/utilidades.php");
        $conn = conectar();

        // consulta para obtener información del donante y su historial de donaciones
        $stmt = $conn->prepare("SELECT donantes.*, historico.* FROM donantes
                               INNER JOIN historico ON donantes.id = historico.Donante
                               WHERE donantes.id = ?
                               ORDER BY historico.FechaDonacion DESC");

        $stmt->execute([$id_donante]);

        // Utiliza fetchAll para obtener todas las filas
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($resultado) {
            echo "<p>";
            echo "<strong>ID:</strong> " . $resultado[0]['id'] . "<br>";
            echo "<strong>Nombre:</strong> " . $resultado[0]['Nombre'] . "<br>";
            echo "<strong>Apellidos:</strong> " . $resultado[0]['Apellidos'] . "<br>";
            echo "<strong>Edad:</strong> " . $resultado[0]['Edad'] . "<br>";
            echo "<strong>Grupo Sanguíneo:</strong> " . $resultado[0]['GrupoSanguineo'] . "<br>";
            echo "<strong>Código Postal:</strong> " . $resultado[0]['CodigoPostal'] . "<br>";
            echo "<strong>Teléfono Móvil:</strong> " . $resultado[0]['TelefonoMovil'] . "<br>";
            echo "</p>";

            echo "<p><strong>Donaciones:</strong></p>";
            echo "<ul>";

            foreach ($resultado as $donacion) {
                echo "<li>ID Donación: " . $donacion['id'] . "</li>";
                echo "<li>Fecha Donación: " . $donacion['FechaDonacion'] . "</li>";
                echo "<li>Fecha Próxima Donación: " . $donacion['FechaProximaDonacion'] . "</li>";
            }

            echo "</ul>";
        } else {
            echo "<p>El donante seleccionado no tienen donanciones por el momento</p>";
        }
    } catch (PDOException $e) {
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
  
    <br>

    <footer>
        <p><a href='index.php'>Página de inicio</a></p>
    </footer>
</body>
</html>
