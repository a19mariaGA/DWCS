
<?php

include("lib/utilidades.php"); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = test_input($_POST["id"]);
    $nombre = test_input($_POST["nombre"]);
    $apellidos = test_input($_POST["apellidos"]);
    $edad = test_input($_POST["edad"]);
    $grupo_sanguineo = test_input($_POST["grupo_sanguineo"]);
    $codigo_postal = test_input($_POST["codigo_postal"]);
    $telefono_movil = test_input($_POST["telefono_movil"]);
 
    $conn = conectar();
    
    try {
 

        if ($conn !== null) {
            $sql = "INSERT INTO donantes (id, Nombre, Apellidos, Edad, GrupoSanguineo, CodigoPostal, TelefonoMovil) 
                    VALUES ($id, '$nombre', '$apellidos',$edad,'$grupo_sanguineo',$codigo_postal,$telefono_movil)";

            $conn->exec($sql);

            echo "<br><br><b><p>Los datos se han insertado correctamente</p></br></br></b>";

            $conn = null; // Cerramos la conexión después de la inserción
        } else {
            echo "<br><br><b><p>Error al conectar a la base de datos</p></br></br></b>";
        }
    } catch (PDOException $e) {
        echo "<br><br><b><p>Error al insertar datos en la tabla donantes: " . $e->getMessage() . "</p></br></br></b>";
    }
    
}


?>


<!DOCTYPE html>
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
    <h1>Alta de donante</h1>

    <div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="mb-3">
                <label for="id" class="form-label">ID:</label>
                <input type="number" class="form-control" id="id" name="id" required>
            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos:</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
            </div>

            <div class="mb-3">
                <label for="edad" class="form-label">Edad:</label>
                <input type="number" class="form-control" id="edad" name="edad" required>
            </div>

            <div class="mb-3">
                <label for="grupo_sanguineo" class="form-label">Grupo Sanguíneo:</label>
                <select class="form-select" id="grupo_sanguineo" name="grupo_sanguineo" required>
                    <option value="O-">O-</option>
                    <option value="O+">O+</option>
                    <option value="A-">A-</option>
                    <option value="A+">A+</option>
                    <option value="B-">B-</option>
                    <option value="B+">B+</option>
                    <option value="AB-">AB-</option>
                    <option value="AB+">AB+</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="codigo_postal" class="form-label">Código Postal:</label>
                <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" required>
            </div>

            <div class="mb-3">
                <label for="telefono_movil" class="form-label">Teléfono Móvil:</label>
                <input type="text" class="form-control" id="telefono_movil" name="telefono_movil" required>
            </div>

            <button type="submit" class="btn btn-primary">Registrar Donante</button>

        </form>
    </div>

    <footer>
        <p><a href='index.php'>Página de inicio</a></p>
    </footer>

</body>

</html>