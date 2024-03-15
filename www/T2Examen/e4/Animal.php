<?php

require_once 'Mascota.php';

 abstract class  Animal implements Mascota{

    protected $nombre;
    protected $edad;


    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

   
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre){
          $this->nombre = $nombre;
     
    }

 
    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad){
          $this->edad = $edad;
     
    }


    public function obtenerNombre(){
      

    }


 

 abstract public function emitirSonido();
    

}

?>