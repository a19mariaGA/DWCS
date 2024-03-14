<?php
    // Obtener ID 
    $usuario_id = $_GET['id'];

    include("lib/utilidades.php");
    $conexion = conectar(); //creamos la conexión 

    try {
        // Consultar datos del usuario con el ID proporcionado, con esto se muestran los datos actuales del usuario
        $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->bindParam(':id', $usuario_id);
        $stmt->execute();

        // Obtener los resultados como un array asociativo.
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

                // Mostrar el formulario con los datos actuales del usuario
                echo "<br>";
                echo "<h1><b>Editar usuario</b></h1></br</br</br>";
                echo "<br>";
                echo "<form action='editar.php?id=" . $usuario['id'] . "' method='post'>";
                echo "Nombre: <input type='text' name='nombre' value='" . $usuario['nombre'] . "'><br>";
                echo "Apellido: <input type='text' name='apellido' value='" . $usuario['apellido'] . "'><br>";
                echo "Provincia: <input type='text' name='provincia' value='" . $usuario['provincia'] . "'><br>";
                echo "Edad: <input type='text' name='edad' value='" . $usuario['edad'] . "'><br>";
                echo "<br>";
        
              echo "<input type='submit' value='Guardar cambios'>";
                echo "<br>";
                echo "</form>";

          // Obtener los nuevos datos del usuario mediante el metodo POST
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener los datos de $_POST
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $provincia = $_POST['provincia'];
            $edad = $_POST['edad'];

            // Realizamos el update con los nuevos datos 
            $stmt = $conexion->prepare("UPDATE usuarios SET nombre=:nombre, apellido=:apellido, provincia=:provincia, edad=:edad WHERE id=:id");
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':apellido', $apellido);
            $stmt->bindParam(':provincia', $provincia);
            $stmt->bindParam(':edad', $edad);
            $stmt->bindParam(':id', $usuario_id);
            $stmt->execute();



            echo "<br><p><b><a href='listar.php'>Consultar tabla actualizada</a></b></p><br>";
       
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
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