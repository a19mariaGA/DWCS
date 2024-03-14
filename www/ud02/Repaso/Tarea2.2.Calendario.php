<?php

/*
Escribir un programa que lea la entrada de la hora de un día en notación 14 horas y muestre la respuesta en notación de 12 horas. 
Por ejemplo, si introducimos 18:05 debe proporcionar como salida 06:05 PM.
*/



function convHora($horaEntrada){

    echo date("g:i a",strtotime($horaEntrada));
     
}

$hora1 = "18:05";
echo "18:05 en formato de 12 horas se corresponde con: "; 
convHora($hora1);


?>