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
    <h1>Alta de administrador</h1>
    <div>
       
    
    <form action="altaadmin.php" method="post">

         <label for="NombreUsuario">Nombre de Usuario:</label>
        <input type="text" name="NombreUsuario" required>


        <label for="Contraseña">Contraseña:</label>
        <input type="password" name="Contraseña" required>

        <input type="submit" value="Registrar Administrador">
    </form>


    </div>

    <footer>
        <p><a href='index.php'>Página de inicio</a></p>
    </footer>

</body>


</html>