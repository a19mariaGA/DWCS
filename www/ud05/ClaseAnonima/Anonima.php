<?php

class Anonima {
    private $base;
    private $altura;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function area() {
        return ($this->base * $this->altura) / 2;
    }

    public function perimetro() {
        return (2 * $this->base) + (2 * $this->altura);
    }
}

?>
