
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda IES San Clemente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1>Lista de usuarios</h1></br>
  


<?php

 include("lib/utilidades.php");
 $conexion = conectar(); //creamos la conexión 


    
    try {
        // Seleccionamos todos los valores de la tabla 
        $stmt = $conexion->prepare("SELECT * FROM usuarios");
        $stmt->execute();

        // Obtener todos los resultados como un array asociativo
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Generamos la tabla
        echo "<table class='table'>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Provincia</th><th>Edad</th><th>Editar</th><th>Eliminar</th></tr>";

        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['apellido'] . "</td>";
            echo "<td>" . $row['provincia'] . "</td>";
            echo "<td>" . $row['edad'] . "</td>";
            echo "<td><a class='btn btn-primary' href='editar.php?id=" . $row['id'] . "'>Editar</a></td>";
            echo "<td><a class='btn btn-primary' href='borrar.php?id=" . $row['id'] . "'>Eliminar</a></td>";
            echo "</tr>";
        }

        echo "</table>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

?>

    <footer>
        <p>
            <a href='index.php'>Página de inicio</a>
        </p>
    </footer>
</body>

</html>