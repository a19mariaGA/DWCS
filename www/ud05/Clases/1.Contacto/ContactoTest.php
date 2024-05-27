<?php

require 'Contacto.php'; 


// Crea 3 objetos de la clase
$contacto1 = new Contacto("Juan", "Pérez", "111111111");
$contacto2 = new Contacto("Elena", "Otero", "222222222");
$contacto3 = new Contacto("Pepe", "Lopez", "333333333");

// muéstrelos a continuación, primero con los métodos get() 

echo "Mostrar información usando el método get:<br><br>";


echo "Contacto 1:<br>";
echo "Nombre: " . $contacto1->get_nombre() . "<br>";
echo "Apellido: " . $contacto1->get_apellido() . "<br>";
echo "Teléfono: " . $contacto1->get_teléfono() . "<br><br>";

echo "Contacto 2:<br>";
echo "Nombre: " . $contacto2->get_nombre() . "<br>";
echo "Apellido: " . $contacto2->get_apellido() . "<br>";
echo "Teléfono: " . $contacto2->get_teléfono() . "<br><br>";

echo "Contacto 3:<br>";
echo "Nombre: " . $contacto3->get_nombre() . "<br>";
echo "Apellido: " . $contacto3->get_apellido() . "<br>";
echo "Teléfono: " . $contacto3->get_teléfono() . "<br><br>";

// luego con el método muestraInformacion().
echo "Mostrar información usando el método muestraInformacion():<br> <br>";

$contacto1->muestraInformacion();
$contacto2->muestraInformacion();
$contacto3->muestraInformacion();

?>