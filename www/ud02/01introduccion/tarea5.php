<?php
/*1. Escribe un programa que pase de grados Fahrenheit a Celsius. 
Para pasar de Fahrenheit a Celsius se resta 32 a la temperatura, 
se multiplica por 5 y se divide entre 9.*/


$fahrenheit=50;

$celsius = ($fahrenheit - 32 ) * 5 / 9;
    
echo "50 grados Fahrenheit son $celsius grados celsius <br/>";
 

echo "<br/>";
echo "Ejercicio 2 <br/>";
echo "<br/>";

/*2. Crea un programa en PHP que declare e inicialice dos 
variables x e y con los valores 20 y 10 respectivamente y
muestre la suma, la resta, la multiplicación, 
la división y el módulo de ambas variables. */
/*(Optativo) Haz dos versiones de este ejercicios.
    - Guarda los resultados en nuevas variables.
    - Sin utilizar variables intermedias. */



$x= 20;
$y=10;

$suma = $x + $y;
$resta = $x - $y;
$multiplicacion = $x * $y;
$division = $x / $y;
$modulo = $x % $y;

echo "Suma: $suma <br/>";
echo "Resta: $resta <br>";
echo "Multiplicación: $multiplicacion <br/>";
echo "División: $division <br/>";
echo "Módulo: $modulo <br/>";

echo "<br/>";
echo "Sin variables intermedias <br/>";
echo "<br/>";


echo "Suma: " . ($x + $y) . "<br/>";
echo "Resta: " . ($x - $y) . "<br/>";
echo "Multiplicación: " . ($x * $y) . "<br/>";
echo "División: " . ($x / $y) . "<br/>";
echo "Módulo: " . ($x % $y) . "<br/>";

echo "<br/>";
echo "Ejercicio 3 <br/>";
echo "<br/>";

/*3. (Optativo) Escribe un programa que imprima por pantalla los cuadrados de los 
30 primeros números naturales.*/ 




    for ($i = 1; $i <= 30; $i++) {
        $cuadrado = $i * $i ;
        
        echo "El cuadrado de $i es: $cuadrado <br/>";
    }




echo "<br/>";
echo "Ejercicio 4 <br/>";
echo "<br/>";


/*4. Hacer un programa php que calcule el área y el perímetro de un rectángulo
 (```área=base*altura``` y (```perímetro=2*base+2*altura```). Debéis declarar 
 las variables base=20 y altura=10. */

 $area;
 $perimetro; 
 $base=20;
 $altura=10; 

 $area= $base * $altura; 
 $perimetro=2*$base+2*$altura;


 echo "El area del cuadrado  es: $area <br/>";

 echo "El perimetro del cuadrado es: $perimetro <br/>";




?>