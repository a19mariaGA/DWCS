<?php 
session_start();  // inicio de sesión

// Verificamos si hay cambios de idioma mediante POST, si se ha enviado el formulario
//si se ha enviado algún cambio en el formulario actualiazamos la variable lang al nuevo valor 
if(isset($_POST["lang"])){
    $lang = $_POST["lang"];
    if(!empty($lang)){
        $_SESSION["lang"] = $lang;
    }
}

// Verificamos si la session ya está creada
if(isset($_SESSION['lang'])){
    // Si es true, se le asigna el valor de lang
    $lang = $_SESSION["lang"];
} else {
    // si no existe ninguna session aun creada se le asigna  gallego por defecto
    $lang = 'gallego';
}

// Mostrar la frase de bienvenida según el idioma seleccionado
switch ($lang) {
    case 'gallego':
        $bienvenida = 'Benvido á miña páxina!';
        break;
    case 'castellano':
        $bienvenida = 'Bienvenido a mi página!';
        break;
    case 'ingles':
        $bienvenida = 'Welcome to my page!';
        break;
    default:
        $bienvenida = 'Bienvenido a mi página!';
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title></title>
</head>
<body>

<form method="post" action="">

    <label for="idioma">Selecciona un idioma:</label>

    <select name="lang">
        <option value="gallego" <?php echo ($lang == 'gallego') ? 'selected' :  'selected'; ?>>Gallego</option>
        <option value="castellano" <?php echo ($lang == 'castellano') ? 'selected' : '' ?>>Castellano</option>
        <option value="ingles" <?php echo ($lang == 'ingles') ? 'selected' : ''; ?>>Inglés</option>
    </select>

    <button type="submit">Cambiar</button>
</form>

<p><?php echo $bienvenida; ?></p>

</body>
</html>

