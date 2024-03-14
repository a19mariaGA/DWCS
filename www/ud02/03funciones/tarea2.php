<?php 
/**
 * Crea unha función chamada `comprobar_nif()` que reciba un NIF e devolva:
 *  `true` se o NIF é correcto.
 *  false` se o NIF non é correcto.
 * A letra do DNI é unha letra para comprobar que o número introducido anteriormente é correcto. 
 * Para obter a letra do DNI débense levar a cabo os seguintes pasos:
 * Dividimos o número entre 23.
 * Co resto da división anterior, obtemos a letra corresponde na seguinte táboa: 
 */

 function comprobar_nif($dni){

      
        // Verificar si el DNI tiene 9 caracteres (8 números y 1 letra)

    if (strlen($dni) == 9) {
        $letra = substr($dni, -1);
        $numeros = substr($dni, 0, -1);

        // Verificar si la letra es válida

        if (strtoupper(substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros % 23, 1)) == $letra) {
            echo 'El DNI  es válido';
        } else {
            echo 'El DNI no es válido';
        }
    } else {
        echo 'Formato de DNI incorrecto';
    }

    echo '<br>';
}

comprobar_nif("16465225Z");
comprobar_nif("46919554Z");
comprobar_nif("74454512P");

?>