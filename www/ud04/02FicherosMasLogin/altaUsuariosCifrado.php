<?php


require "lib/base_datos.php";
require "lib/utilidades.php";





if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {


    $usuario = $_POST["usuario"];
    $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);
    $apellidos = $_POST["apellidos"];
    $edad = $_POST["edad"];
    $provincia = $_POST["provincia"];


      $conexion = get_conexion();
      seleccionar_bd_tienda($conexion);
      
      dar_alta_usuario($conexion, $usuario, $pass, $apellidos, $edad, $provincia);

      echo ( "Usuario dado de alta correctamente");

      cerrar_conexion($conexion);


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
<h1>Alta de usuario con pass cifrada </h1>

<p>Formulario de alta</p>

<!-- Se va a procesar en el mismo archivo y se enviará por POST, no por GET-->

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    Nombre: <input type="text" name="usuario" id="usuario" placeholder="Escribe tu nombre de usuario">
    <br><br>
    Contraseña:<input name="pass" id="pass" type="password" placeholder="Contraseña" maxlength="50">
    <br><br>
    Apellidos: <input type="text" name="apellidos">
    <br><br>
    Edad: <input type="text" name="edad">
    <br><br>
    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provincia: </label>
    <select name="provincia" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
        <option value="corunha">A Coruña</option>
        <option value="lugo">Lugo</option>
        <option value="ourense">Ourense</option>
        <option value="pontevedra">Pontevedra</option>
    </select>
    <input type="submit" name="submit" value="Submit">
</form>

<footer>
    <p>
        <a href='index.php'>Página de inicio</a>
    </p>
</footer>
</body>

</html>
