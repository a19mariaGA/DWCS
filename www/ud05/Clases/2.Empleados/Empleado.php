<?php

class Empleado {

    // PROPIEDADES
    public $nombre;
    public $salario;
    public static $numEmpleados = 0;

    // MÉTODOS
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setSalario($salario) {
        // El salario de entrada no podrá superar los 2000 euros
        if ($salario > 2000) {
            $salario = 2000; // Establecer el salario máximo permitido
        }
        $this->salario = $salario;
    }

    //Crea un método getSalario() que devuelva el salario del objecto que lo llame.
    public function getSalario() {
        return $this->salario;
    }

    // Cada vez que se cree un empleado se debe aumentar la variable $numEmpleados
    // constructor
    public function __construct($nombre, $salario) {
        $this->setNombre($nombre);
        $this->setSalario($salario);
        self::$numEmpleados++; // funcionaría como un contador
    }
}


?>
