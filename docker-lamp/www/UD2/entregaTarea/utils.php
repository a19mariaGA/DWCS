<?php

include_once('nueva.php');

// Variable global para almacenar las tareas
global $tareas;
$tareas = []; 

function devolver_tareas() {
    global $tareas;

    foreach ($tareas as $tarea) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($tarea['ID']) . '</td>';
        echo '<td>' . htmlspecialchars($tarea['contenido']) . '</td>';
        echo '<td>' . htmlspecialchars($tarea['estado']) . '</td>';
        echo '</tr>';
    }
}


//Filtrar el contenido de un campo para que no contenga caracteres especiales, espacios en blanco duplicados, etc. Recibe la variable y la devuelve filtrada.
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

//Comprobar que un campo contiene información de texto válida, devolviendo true si se cumplen todos los requisitos o false si no es así. 
//Deberá filtrar con la función anterior previamente antes de comprobar si es válido
function texto_valido($ID, $contenido, $estado) {

    $ID = test_input($ID);
    $contenido = test_input($contenido);
    $estado = test_input($estado);
    
    if (!is_numeric($ID)) {
        echo "El id debe de ser númerico";
        return false; 
    }

    // Deberá hacer uso de las función de filtrado
    if (!is_string($contenido) || !is_string($estado)) {
        return false; 
    }

    return [$ID, $contenido, $estado]; // Cambiado a devolver un array
}

//Guardar una tarea de forma simulada (se añade al array)

function guardar_tarea($ID, $contenido, $estado) {
    global $tareas;

    // Validar los datos y obtener los valores filtrados
    $validacion = texto_valido($ID, $contenido, $estado);
    
  

    list($ID, $contenido, $estado) = $validacion; // Asignar valores devueltos

    // Crear un array clave-valor 
    $tareas[] = [
        'ID' => $ID,
        'contenido' => $contenido,
        'estado' => $estado
    ];

    return true; // Tarea guardada con éxito
}




?>


