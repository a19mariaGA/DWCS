
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda IES San Clemente </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1>Alta de usuario </h1>
    
    
    <?php
    
    include("lib/utilidades.php");
    
    $conexion = conectar(); //creamos la conexión 
    
    $nombre = $apellido = $edad = $provincia = "";
    
    //recibimos los datos 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = test_input($_POST['nombre']);
        $apellido = test_input($_POST['apellido']);
        $edad = test_input($_POST['edad']);
        $provincia = test_input($_POST['provincia']);
        
        insertar_datos($conexion, $nombre, $apellido, $edad, $provincia);  //llamamos a la función insert
    }
    
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

<br><h2><b>Formulario de alta</b></h2><br>

    <div class="container">
        <form class="mt-3" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control"><br>
            </div>

            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" class="form-control"><br>
            </div>

            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" name="edad" class="form-control"><br>
            </div>

            <div class="form-group">
                <label for="provincia">Provincia:</label>
                <input type="text" name="provincia" class="form-control"><br><br>
            </div>

            <input type="submit" name="submit" value="Alta usuarios" class="btn btn-primary">
        </form>
    </div>

    <footer>
        <p>
            <a href='index.php'>Página de inicio</a>
        </p>
    </footer>
</body>

</html>