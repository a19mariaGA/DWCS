<?php

include_once ('Figura.php');

class Rectangulo extends Figura
{

    public function __construct($ancho, $alto)
    {
        $this->ancho = $ancho;
        $this->alto = $alto;
        
    }

    public function getAlto()
    {
        return $this->alto;
    }


    public function setAlto($alto)
    {
        $this->alto = $alto;
    }



    public function getAncho()
    {
        return $this->ancho;
    }


    public function setAncho($ancho)
    {
        $this->ancho = $ancho;
    }



        // Método abstracto para dibujar la figura
        public  function dibujar(){
            echo "Soy el Rectangulo  mi altura es " . $this->alto. " y mi ancho es " .$this->ancho;

        }
    
        // Método abstracto para agrandar la figura
        public  function agrandar($factor){

             $nuevoAlto= $factor*$this->alto;
             $nuevoAncho=$factor*$this->ancho; 

            echo "Al multiplicar  mi altura por " . $factor."  mi nuevo alto es ". $nuevoAlto. " y mi nuevo ancho es " .$nuevoAncho;

        }
        
        // Método abstracto para encoger la figura
        public  function encoger($factor){

            $nuevoAlto2= $factor/$this->alto;
            $nuevoAncho2=$factor/$this->ancho; 

           echo "Al dividir  mi altura por " . $factor."  mi nuevo alto es ". $nuevoAlto2. " y mi nuevo ancho es " .$nuevoAncho2;

        }


}