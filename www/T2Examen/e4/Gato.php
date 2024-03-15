<?php


require_once 'Animal.php';
require_once 'Mascota.php';


class Gato extends Animal implements Mascota {


    public function obtenerNombre(){
        echo "Soy un gato y mi nombre es " . $this->nombre;

    }

    public function emitirSonido(){

        echo "Miau miua";
    }

}
?>