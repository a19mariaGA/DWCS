<?php

include_once ('Persona.php');
class Usuario extends Persona {


    public function __construct($nombre,$apellidos){
        $this->nombre = $nombre;
        $this ->apellidos = $apellidos;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function accion(){
        echo  'Nombre: '.$this->nombre.' Apellidos: '.$this->apellidos.' ->Usuario';
    }

    }

?>