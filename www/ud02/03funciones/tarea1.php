<?php 

// 1. Crea una función que reciba un carácter e imprima se o carácter é un díxito entre 0 e 9.


function eDixito($caracter){

    if(is_numeric($caracter) && $caracter >=0 && $caracter<=9 ){
        echo "$caracter: El caracter es un número entre 0 y 9 </br>";} 
    else{echo "$caracter: El caracter no es un número entre 0 y 9 </br>"; }

}

$caracter1= "a";
$caracter2= "2"; 
$caracter3= "p";
$caracter4= "6"; 
eDixito($caracter1);
eDixito($caracter2);
eDixito($caracter3);
eDixito($caracter4); 


// 2. Crea una función que reciba un string e devolva a súa lonxitude.


echo " </br> </br> </br>"; 

function contLonxitude ($cadea){

    $total = strlen ($cadea);
    return $total; 

}

$cadea1 = "Hoy es lunes";
$total =  contLonxitude ($cadea1); 

echo  " $cadea1:  tiene un total de  $total  caracteres </br>";

$cadea2 = "Mañana es martes";
$total =  contLonxitude ($cadea2);

echo  " $cadea2:  tiene un total de  $total  caracteres </br>";


// 3. Crea una función que reciba dous número `a` e `b` e devolva o número `a` elevado a `b`.

echo " </br> </br> </br>"; 

function elevado ($a, $b){

if (is_numeric($a)&& is_numeric($b)){

    $c= pow($a, $b);
    echo "$a elevado a $b  es $c </br>";

} else { echo "$a o $b no es un número </br>"; }

}

$a =2;
$b =2;

$d= elevado($a, $b); 


$aa ="p";
$bb =2;

$dd= elevado($aa, $bb); 


// 4. Crea una función que reciba un carácter e devolva `true` se o carácter é unha vogal.

echo " </br> </br> </br>"; 

function eVocal($a) {
    $v = ['a', 'e', 'i', 'o', 'u'];
    $a = strtolower($a); // Convertir a minúsculas para hacer la comparación insensible a mayúsculas

    return in_array($a,  $v);
}

// Ejemplo de uso
$a = 'B';
if (eVocal($a)) {
    echo "El carácter $a es una vocal.";
} else {
    echo "El carácter $a no es una vocal.";
}



// 5. Crea una función que reciba un número e devolva se o número é par ou impar.

echo " </br> </br> </br>"; 

function ePar ($a){

    if (is_numeric($a)){

        if($b= ($a%2 ==0)){
            echo "$a Es un número par </br>";
        } else {
            echo "$a No es un número par </br>";
        }
        
        
    
    } else { echo "$a  no es un número </br>"; }

}


$c= 8;
$d=7;
$t="w"; 

$b1=ePar($c);
$b2=ePar($d);
$b3=ePar($t);


// 6. Crea una función que reciba un string e devolva o string en maiúsculas.

echo " </br> </br> </br>"; 


function pasarMay($palabra) {
    return strtoupper($palabra);
}

// Ejemplo de uso
$palabra = "Este es el ejercicio tarea1.php";
$resultado = pasarMay($palabra);

echo "  $palabra  en mayusculas se escribe: $resultado"; 


// 7. Crea una función que imprima a zona horaria (*timezone*) por defecto utilizada en PHP.

echo " </br> </br> </br>"; 

function zonaHoraria() {
    $hora= date_default_timezone_get();
    echo "$hora"; 
}
zonaHoraria();

/* 8. Crea una función que imprima a hora á que sae e se pon o sol para a 
localización por defecto. Debes comprobar como axustar as coordenadas (latitude e lonxitude)
 predeterminadas do teu servidor.
*/

echo " </br> </br> </br>"; 


function imprimirHora() {

    // Coordenadas de Santiago de Compostela
    $latitud = 42.8782;
    $longitud = -8.5448;

    $informacionSolar = date_sun_info(time(), $latitud, $longitud);

    echo "En Santiago o sol sae as: ". date("H:i:s", $informacionSolar['sunrise']) . "</br>";
    echo "En Santiago o sol marcha as: " . date("H:i:s", $informacionSolar['sunset']);
}


imprimirHora();

?>