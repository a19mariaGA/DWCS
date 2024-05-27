<?php

require_once('Empleado.php');
require_once('Operario.php');

$empleado1 = new Operario("Juan", 1000 , "diurno");
$empleado2 = new Operario("Maria", 2000, "nocturno");
$empleado3 = new Operario("Pedro", 3000, "partido");

echo "Mostrar información de los empleados:<br><br>";

echo "<br>Operario 1:<br> ";
echo "Nombre: " . $empleado1->getNombre() . "<br>";
echo "Salario: " . $empleado1->getSalario() . "<br>";
echo "Turno: " . $empleado1->getTurno(). "<br>";

echo "<br>Operario 2:<br>";
echo "Nombre: " . $empleado2->getNombre() . "<br>";
echo "Salario: " . $empleado2->getSalario() . "<br>";
echo "Turno: " . $empleado2->getTurno(). "<br>";

echo "<br>Operario 3:<br>";
echo "Nombre: " . $empleado3->getNombre() . "<br>";
echo "Salario: " . $empleado3->getSalario() . "<br>";
echo "Turno: " . $empleado3->getTurno(). "<br>";

echo " <br> <br>Número total de empleados: " . Empleado::$numEmpleados;

?>