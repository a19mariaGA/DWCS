<?php

require_once('Empleado.php');
//require_once('Operario.php');


$empleado1 = new Empleado("Juan", 1000);
$empleado2 = new Empleado("Maria", 2000);
$empleado3 = new Empleado("Pedro", 3000);

echo "Mostrar información de los empleados:<br><br>";

echo "<br>Empleado 1:<br> ";
echo "Nombre: " . $empleado1->getNombre() . "<br>";
echo "Salario: " . $empleado1->getSalario() . "<br>";


echo "<br>Empleado 2:<br>";
echo "Nombre: " . $empleado2->getNombre() . "<br>";
echo "Salario: " . $empleado2->getSalario() . "<br>";


echo "<br>Empleado 3:<br>";
echo "Nombre: " . $empleado3->getNombre() . "<br>";
echo "Salario: " . $empleado3->getSalario() . "<br>";


echo " <br> <br>Número total de empleados: " . Empleado::$numEmpleados;

?>