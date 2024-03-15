<?php

namespace e3;

require_once 'Figura.php';

class Rectangulo extends Figura
{


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

}