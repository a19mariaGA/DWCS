<?php


require_once 'Animal.php';
require_once 'Mascota.php';


class Perro extends Animal implements Mascota {

    public function obtenerNombre(){
        echo "Soy un perro y mi nombre es " . $this->nombre;

    }
  

    public function emitirSonido(){

        echo "Guau guau";
    }

}
?>