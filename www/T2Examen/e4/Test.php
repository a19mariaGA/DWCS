<?php

require_once 'Perro.php';
require_once 'Gato.php';


$gato= new Gato("Tango", 5);
$perro= new Perro("Samba", 4);


$gato->obtenerNombre();
echo "<br>";
$gato->emitirSonido();

echo "<br>";
echo "<br>";
echo "<br>";

$perro->obtenerNombre();
echo "<br>";
$perro->emitirSonido();

?>