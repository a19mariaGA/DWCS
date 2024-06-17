<?php

// Verificar si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el nombre y el contenido de la nota desde el formulario
    $nombre = $_POST['nombre'] ?? '';
    $contenido = $_POST['contenido'] ?? '';

    //Guardar la nota en un archivo
    //abrimos el archivo y lo creamos si no existe con el nombre que hemos indicado en el form
    $directorio_notas = fopen("./notas/$nombre.txt", "w") or die("Unable to open file!");

    // el contenido lo añadimos al fichero que hemos creado antes
    fwrite($directorio_notas, "$contenido.;");
    fclose($directorio_notas);

    echo "La nota se ha guardado correctamente en el archivo: $directorio_notas$nombre.txt";
} else {
    // Si no se han enviado los datos del formulario, redirigir al formulario
    header('Location: formulario.html');
    exit();
}



