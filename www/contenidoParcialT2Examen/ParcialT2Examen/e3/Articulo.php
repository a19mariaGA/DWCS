<?php
require_once "Imprimible.php"; 


class Articulo implements Imprimible {
    protected $titulo;
    protected $contenido;
    protected $autor;



    public function __construct($titulo, $contenido, $autor)
    {
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->autor = $autor;
    }




    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }



    public function getContenido()
    {
        return $this->contenido;
    }

    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    }



    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function imprimirEnTabla():tring{

    }
    public function imprimirEnLista():tring{

    }


}
?>