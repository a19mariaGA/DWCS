<?php
require_once 'Vehiculo.php';

 class Moto extends Vehiculo
{

    private $estado;



  
    public function __construct( $marca, $modelo, $estado)

    {
        parent::__construct($marca, $modelo);
        

        if($this->estado!="arrancado"||$this->estado!="parado"){
            echo"El estado solo puede ser arrancado o parado";
        }else
            $this->estado = $estado;
    
    }


    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->id = $estado;
    }


 
    public function arrancar($estado){
        $this->id = $estado;

    }

    public function detener($estado){

        $this->id = $estado;
    }

}


?>