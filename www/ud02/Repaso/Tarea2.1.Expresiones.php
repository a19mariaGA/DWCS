<?php 

/*
1- ¿Cuál es el resultado de las siguientes expresiones?. Comprueba el resultado.

70 * 10 – 5 % 3 * 4 + "9"
(( 5 + 3) / 2 * 3) / 2 - (int) 28.75 / 4 + 29 % 3 * 4
$r =’C’ – (double) 5 / 2 + 3.5 + 0.4 (Nota ‘C’ é o ascii: 67)
*/


// php transforma la cadena "9" en un número 

$total1 = 70 * 10 - 5 % 3 * 4 + "9";  
echo $total1 ;

echo "<br>";


$total2 = (( 5 + 3) / 2 * 3) / 2 - (int) 28.75 / 4 + 29 % 3 * 4;
echo $total2 ;


echo "<br>";

/*
2- Indica cuál sería la salida del siguiente programa:

   */

    $m = 99;
    $n = ++$m; // incrementamos m en 1, n y m ahora son 100
    echo "m = $m, n = $n \n";

    echo "<br>";

    $n = $m++; // n ahora es igual a m que vale 100 y luego a m se le suma 1
     echo " m = $m, n = $n \n";

     echo "<br>";

    printf("m = %d \n", $m++); // printf é unha func. de C para imprimir que se pode empregar en PHP.
    // m vale 101 se imprime y  luego se suma 1, por lo que m =101 +1 =102


    echo "<br>";

    printf("m = %d \n",++$m);

    // incrementamos 1 y se imprime m = 102+1 
 




 /*
3- Indica cuál sería la salida del siguiente programa:

*/

echo "<br>";

$n = 5; // valor de n inicial 
$t = ++$n * --$n; // incrementamos n en 1, pasa a valer 6 , luego se decrementa 1, pero como ya valia 6 vuelve a valer 5. 


echo "n = $n, t = $t\n"; // n vale 5, puesto que se volvio a decrecer en 1, y  t es 6 * 5

echo "<br>";

printf("%d %d %d", ++$n, ++$n, ++$n); // incrementamos en 1, 6>7>8



/*
4- Escribe un programa que calcule el factorial de un número.
*/

echo "<br>";


function factorial ($num){

    $resultado=1;

    for ($i = 1; $i <= $num; $i++) {
        $resultado *= $i;
    }

    echo "El factorial de $num es = $resultado"; 


}

$num1 = 5; 
factorial($num1); 

echo "<br>";

/*
5-Escribir una página web que dados unos segundos (recogidos en un formulario) exprese su equivalente en semanas, días, horas, minutos y segundos.
*/




echo "he creado la webSegundos.php"; 

echo "<br>" ;



/*
6- El domingo de pascua es el primer domingo después de la primera luna llena posterior al equinoccio de primavera y se determina mediante el siguiente cálculo sencillo:
A = anho mod 19 B = anho mod 4 C = anho mod 7 D = (19 * A + 24) mod 30 E = (2 * B + 4 * C + 6 * D + 5) mod 7 N = (22 + D + E)

Donde N indica el número de día del mes de marzo (si N es igual o menor que 31) o abril (si es mayor que 31). Contruir un programa que determina 
las fechas de domingos de pascua dado el año. Nota: Emplea únicamente las variables anho, d y n.

*/ 


?>