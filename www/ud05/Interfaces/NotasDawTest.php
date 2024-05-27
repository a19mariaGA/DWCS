<?php

include("NotasDaw.php");



$notasDaw = new NotasDaw([8, 6, 4, 7, 2, 9, 10]);

// Mostrar resultados
echo "Notas: " . $notasDaw->toString()."<br>";
echo "Número de aprobados: " . $notasDaw->numeroDeAprobados() . "<br>";
echo "Número de suspensos: " . $notasDaw->numeroDeSuspensos() . "<br>";
echo "Nota media: " . $notasDaw->notaMedia() . "<br>";


?>