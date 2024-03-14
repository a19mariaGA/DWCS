<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $codigoPostal = $_POST['CodigoPostal'];
    $tipoSangre = $_POST['GrupoSanguineo'];

    try {
        require("lib/utilidades.php");
        $conn = conectar();

        $sql = "SELECT * FROM donantes WHERE CodigoPostal = '$codigoPostal'";

        // En caso de que se seleccione un tipo de sangre
        if ($tipoSangre !== "") {
            $sql .= " AND GrupoSanguineo = '$tipoSangre'";
        }

        $result = $conn->query($sql);

        if ($result->rowCount() > 0) {
            echo "Donantes encontrados:<br>";
            foreach ($result as $donante) {
                echo "ID: " . $donante['id'] . ", Nombre: " . $donante['Nombre'] . ", Apellidos: " . $donante['Apellidos'] . "<br>";
            }
        } else {
            echo "No hay donantes para el código postal y tipo de sangre seleccionados.<br>";
        }

    } catch(PDOException $e) {
        echo "Error al buscar donantes: " . $e->getMessage() . "<br>";
    } finally {
        $conn = null;
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
    <h1>Buscar donantes</h1>
    <div>

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <div class="mb-3">
                <label for="CodigoPostal" class="form-label">Código Postal:</label>
                <input type="text" class="form-control" id="CodigoPostal" name="CodigoPostal" required>
            </div>

            <div class="mb-3">
                <label for="GrupoSanguineo" class="form-label">Grupo Sanguíneo:</label>
                <select class="form-select" id="GrupoSanguineo" name="GrupoSanguineo">
                    <option value="">Cualquier tipo de sangre</option>
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

            <button type="submit" class="btn btn-primary">Buscar Donantes</button>

        </form>

    </div>

    <footer>
        <p><a href='index.php'>Página de inicio</a></p>
    </footer>
</body>

</html>
