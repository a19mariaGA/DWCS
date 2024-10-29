<?php

include_once('nueva.php');


// Inicializamos una variable global para almacenar las tareas
$tareas = [];

// Función para añadir una tarea

function añadir($descripcion, $estado) {
    global $tareas;

    // Filtrar la descripción y el estado
    $descripcion = filtrar_contenido($descripcion);
    $estado = filtrar_contenido($estado);

    // Validar campos
    if (!es_texto_valido($descripcion) || !es_texto_valido($estado)) {
        return false; // Si no es válido, devuelve false
    }

    // Generar un ID único para la tarea
    $id = count($tareas) + 1; // Simplemente incrementamos el contador de tareas para generar un ID

    // Crear el nuevo array para la tarea
    $nueva_tarea = [
        'id' => $id,
        'descripcion' => $descripcion,
        'estado' => $estado
    ];

    // Almacenar la nueva tarea en el array global
    $tareas[] = $nueva_tarea;
    
    return true; // Si se guarda correctamente, devuelve true
}

// Función para filtrar contenido
function filtrar_contenido($contenido) {
    // Eliminar caracteres especiales y espacios duplicados
    $contenido = trim($contenido); // Elimina espacios al principio y al final
    $contenido = preg_replace('/\s+/', ' ', $contenido); // Reemplaza espacios en blanco duplicados
    $contenido = htmlspecialchars($contenido); // Escapa caracteres especiales
    return $contenido;
}

// Función para comprobar que un campo contiene información de texto válida
function es_texto_valido($texto) {
    $texto = filtrar_contenido($texto); // Filtrar el texto primero
    // Comprobar si el texto no está vacío y tiene un mínimo de 1 carácter
    return !empty($texto) && strlen($texto) >= 1;
}

// Función para mostrar todas las tareas

    function mostrar() {
        global $tareas;
        return $tareas;
    }



?>


