

<?php

include_once('utils.php');

// define variables and set to empty values
$titulo = $contenido = "";
$tituloErr = $contenidoErr = "";

$errores = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["titulo"])) {
        $tituloErr = "Es obligatorio poner un título";
        $errores[] = $tituloErr;

    } else {
        $titulo = test_input($_POST["titulo"]);
    }

    if (empty($_POST["contenido"])) {
        $contenidoErr = "Es obligatorio añadir contenido";
        $errores[] = $contenidoErr;
    } else {
        $contenido = test_input($_POST["contenido"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if (count($errores) > 0) {

    foreach ($errores as $error) {
        echo "<li>$error</li>";
    }

} else {
    // Si no hay errores, simular el guardado de la tarea
    $resultado = simular($titulo, $contenido);

    // Mostrar el mensaje de éxito o fallo
    if ($resultado) {
        
        echo "Tarea guardada con éxito.";
        
    } else {
        
        echo "No se ha podido guardar la tarea";
        
    }
}


?>
