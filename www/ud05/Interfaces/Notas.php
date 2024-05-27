<?php


abstract  class notas{
    private $notas;


    public function __construct($notas) {
        $this->notas = $notas;
    }

   
    public function getNotas() {
        return $this->notas;
    }

    public function setNotas($notas){
          $this->notas = $notas;
     
    }

    public abstract function toString();



}

?>