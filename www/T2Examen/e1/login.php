<?php
session_start();

if (isset($_SESSION['username'])) {
    header('Location: index.php');
}

// Datos de usuario para validar (en un caso real, estos datos se obtendrían de una base de datos)
$usuarios = array(
    'usuario1' => 'contraseña1',
    'usuario2' => 'contraseña2',
    // Puedes agregar más usuarios si lo deseas
);

// Obtener los datos del formulario


if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['login'])) {
    if (!empty($_POST['username']) && is_string($_POST['username']) && strlen($_POST['username']) <= 50) {
        $username = test_input($_POST['username']);
    } else {
        $mensajes[] = array("error", "Introduce un nombre válido: texto y menos de 50 carácteres.");
    }

    if (!empty($_POST['password']) && is_string($_POST['password']) && strlen($_POST['password']) <= 100) {
        $password = test_input($_POST['password']);
    } else {
        $mensajes[] = array("error", "Introduce un password válido: texto y menos de 100 carácteres.");
    }
}



// Validar las credenciales
if (isset($usuarios[$username]) && $usuarios[$username] === $password) {
    
    login($username, $password);
   
    header('Location: welcome.php');
    exit();
} else {
    // Credenciales inválidas, redirigir al formulario de inicio de sesión
    header('Location: index.php');
    exit();
}
