<?php


require_once('Empleado.php');

//Crea una clase Operario en un fichero Operario.php que sea clase hija de Empleado.Crea una clase Operario en un fichero Operario.php que sea clase hija de Empleado.
class Operario extends Empleado {

    //Tendrá una propiedad privada “turno”.
    private $turno;

    // Deberá ejecutar el constructor de la clase padre añadiendo la variable turno.
    public function __construct($nombre, $salario, $turno) {
        parent::__construct($nombre, $salario); // Llamada al constructor de la clase padre
        $this->setTurno($turno);
        
    }

   
    public function getTurno() {
        return $this->turno;
    }

    //Crear el setter para turno. Los valores para esta variable sólo pueden ser “diurno” o “nocturno”.
    public function setTurno($turno) {
        
        $turno = strtolower($turno); // Convertir a minúsculas para hacer la comparación no sensible a mayúsculas
        if ($turno === "diurno" || $turno === "nocturno") {
            $this->turno = $turno;
        } else {
            $this->turno = "error"; 
        }
    }
}

?>
