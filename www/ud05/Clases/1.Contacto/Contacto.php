<?php
class Contacto {

    //propiedades privadas: nombre, apellido y número de teléfono.
    private $nombre;
    private $apellido;
    private $teléfono;

//Define un constructor con 3 argumentos, que asigne los valores a las propiedades.
    function __construct($nombre, $apellido, $teléfono ){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->teléfono = $teléfono;
      }


    //Genera los getters y los setters para todas las propiedades
    function set_nombre($nombre) {
        $this->nombre = $nombre;
      }
      function get_nombre() {
        return $this->nombre;
      }


      function set_apellido($apellido) {
        $this->apellido = $apellido;
      }
      function get_apellido() {
        return $this->apellido;
      }


      function set_teléfono($teléfono) {
        $this->teléfono = $teléfono;
      }
      function get_teléfono() {
        return $this->teléfono;
      }

 //el método muestraInformacion() que imprima los valores de las propiedades.

      function muestraInformacion() {  
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Apellido: " . $this->apellido . "<br>";
        echo "Teléfono: " . $this->teléfono . "<br>";
        echo  "<br>";
      }


      public function __destruct() {
        echo "<br> Objeto destruido: <br> <br>";
        $this->muestraInformacion();
        echo "<br>";
    }

}
?>