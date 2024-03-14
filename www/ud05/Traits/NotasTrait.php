<?php


require_once ("CalculosCentroEstudios.php");
require_once ('MostrarCalculos.php');

class NotasTrait {
    use CalculosCentroEstudios2, MostrarCalculos;

    private $notas = array();

    public function getNotas() {
        return $this->notas;
    }
}





// Crear una instancia de la clase NotasTrait
$nota1 = new NotasTrait();
$nota2 = new NotasTrait();

// Llamar a funciones de los traits
$nota1->saludar();
$nota1->showCalculusStudyCenter(5, 6, 3);

$nota2->saludar();
$nota2->showCalculusStudyCenter(8, 8, 8);


?>