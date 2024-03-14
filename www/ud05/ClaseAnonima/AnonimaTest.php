<?php

include('Anonima.php');

$anonima1 = new Anonima(10, 15);
$anonima2 = new Anonima(20, 30);
$anonima3 = new Anonima(30, 21);

echo "Objeto 1: <br>";
echo "Área: " . $anonima1->area() . "<br>";
echo "Perímetro: " . $anonima1->perimetro() . "<br><br>";

echo "Objeto 2:<br>";
echo "Área: " . $anonima2->area() . "<br>";
echo "Perímetro: " . $anonima2->perimetro() . "<br><br>";

echo "Objeto 3:<br>";
echo "Área: " . $anonima3->area() . "<br>";
echo "Perímetro: " . $anonima3->perimetro() . "<br><br>";



?>