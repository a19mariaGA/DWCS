<?php

require_once 'Coche.php';


$coche1 = new Moto("ford", "cualquiera", "arrancado");

$coche1 ->obtenerDescripcion(); 
$coche1 -> estadoActual();
$coche1->getEstado();


?>