<?php
class Participante{

    //Tendrá dos propiedades: nombre y edad

    private $nombre;
    private $edad;


    //Cree sus constructores y métodos de acceso.


    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function getNombre() {
        return $this->nombre;
    }
    

    public function setEdad($edad) {
        $this->edad = $edad;
    }
    public function getEdad() {
        return $this->edad;
    }

    public function __construct($nombre, $edad) {
        $this->setNombre($nombre);
        $this->setEdad($edad);
        
    }

}

?>