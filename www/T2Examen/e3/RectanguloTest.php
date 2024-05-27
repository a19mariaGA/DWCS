<?php

require_once 'Rectangulo.php';

$rectangulo1= new Rectangulo (15,35);
$rectangulo1->dibujar();
echo "\n";

echo "<br>";

$rectangulo1->agrandar(2);

echo "<br>";

$rectangulo1->encoger(2);
?>