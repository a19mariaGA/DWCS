<?php
session_start();    
session_destroy();
$_SESSION = array();
	
setcookie('username', 123, time() - 1000); 

// Redirigir al formulario de inicio de sesión
header('Location: index.php');
exit();
