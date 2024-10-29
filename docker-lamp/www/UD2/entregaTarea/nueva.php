<?php
// Inicializamos un array para almacenar las tareas

include_once('utils.php');


$tareas = [];

// Definir variables y establecer valores vacíos
$titulo = $contenido = $estado = "";
$errores = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["titulo"])) {
        $errores[] = "Es obligatorio poner un título";
    } else {
        $titulo = test_input($_POST["titulo"]);
    }

    if (empty($_POST["contenido"])) {
        $errores[] = "Es obligatorio añadir contenido";
    } else {
        $contenido = test_input($_POST["contenido"]);
    }

    if (empty($_POST["estado"])) {
        $errores[] = "Es obligatorio añadir el estado";
    } else {
        $estado = test_input($_POST["estado"]);
    }

    if (count($errores) === 0) {
        // Añadir la tarea al array si no hay errores
        $tareas[] = [
            'titulo' => $titulo,
            'contenido' => $contenido,
            'estado' => $estado
        ];
        echo "Tarea guardada con éxito.";
    } else {
        foreach ($errores as $error) {
            echo "<li>$error</li>";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
