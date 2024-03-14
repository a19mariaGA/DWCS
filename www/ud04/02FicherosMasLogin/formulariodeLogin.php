<?php
session_start();

require "lib/base_datos.php";
require "lib/utilidades.php";
$conexion = get_conexion();
seleccionar_bd_tienda($conexion);

function comprobar_usuario($nombre, $pass, $conexion) {
   
    $sql = "SELECT nombre, pass FROM usuarios WHERE nombre = '$nombre'";
    $resultado = ejecutar_consulta($conexion, $sql);


    $usuario_bd = mysqli_fetch_assoc($resultado);


    if ($usuario_bd && password_verify($pass, $usuario_bd['pass'])) {
        $usuario['nombre'] = $nombre;
        $usuario['rol'] = 0;
        return $usuario;
    } else {
        return false;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $usuario = $_POST["usuario"];
    $pass = $_POST["pass"];

    $user = comprobar_usuario($usuario, $pass, $conexion);

    if (!$user) {
        $error = true;
        echo "<h3>No está registrado como usuario</h3><br>";
    } else {
        $_SESSION['usuario'] = $user;
        // Redirigimos a index.php
        header('Location: index.php');
        exit();
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda IES San Clemente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>


<h2>Formulario de logueo </h2>

<!-- Se va a procesar en el mismo archivo y se enviará por POST, no por GET-->

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    Nombre: <input type="text" name="usuario" id="usuario" >
    <br><br>
    Contraseña:<input name="pass" id="pass" type="password" >
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<footer>
    <p>
        <a href='index.php'>Página de inicio</a>
    </p>
</footer>
</body>

</html>
