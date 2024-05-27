<?php

require_once('Participante.php');
class Arbitro extends Participante{

    private  $añosArbitrando;


    public function setAñosArbitrando($añosArbitrando) {
        $this->añosArbitrando = $añosArbitrando;
    }
    public function getAñosArbitrando() {
        return $this->añosArbitrando;
    }



    public function __construct($nombre, $edad, $añosArbitrando) {
        parent::__construct($nombre, $edad); // Llamada al constructor de la clase padre
        $this->setAñosArbitrando($añosArbitrando);
        
    }


}



?>