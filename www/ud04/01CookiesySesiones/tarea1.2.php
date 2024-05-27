<?php
    session_start();
?>



<!DOCTYPE html>
<html>
<body>

<h1> Este es un ejercicio de prueba para contar las sesiones </h1>


<?php


echo "Ha visitado esta página un total de : " . $_SESSION["count"] . " veces";

?>



</body>