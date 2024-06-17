<?php

 function contarVocales($cadena){

    $vocalesEncontradas = 0;
    $cadena = strtolower($cadena);

    $longitud = strlen($cadena);

	for ($indice = 0; $indice < $longitud; $indice++) { 

	
		if (in_array($cadena[$indice], ["a", "e", "i", "o", "u"])) {
			$vocalesEncontradas++;
		}
	}
	return $vocalesEncontradas;

 }


 function sanear_string($cadena){
 $result = [];

     if ($cadena=="a"||$cadena=="e"||$cadena=="i"||$cadena=="o"||$cadena=="u") {
         $result[$cadena];
     } else {
         $result[] = "";
     }
  
}


function sanear_string2($cadena){
    
    $result = [];
    $text = explode("aeiouAEIOU", $cadena);
    var_dump($text);
   }




?>