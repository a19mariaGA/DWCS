<?php

 class ExcepcionPropiaClase{

    public static function testNumber ($number){

        
        try {
            if ($number == 0) {
                throw new ExcepcionPropia('Error el número  es 0');
            } else {
                echo "$number <br>";
            }
        } catch (ExcepcionPropia $e) {
            echo 'Excepción capturada: ' . $e->getMessage() . "<br>";
        }

 

    }


}

?>