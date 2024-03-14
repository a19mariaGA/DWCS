

<?php


$a = "true"; // imprime el valor devuelto por is_bool($a)...
echo is_bool($a);  // no imprime nada pq es falso, al ir entre comillas es un String 
echo gettype($a) ;

echo"<br />";


$c = "false"; // imprime el valor devuelto por gettype($c);
echo gettype($c); // String

echo"<br />";

$d = ""; // el valor devuelto por empty($d);
echo empty($d);  // devuelve 1, que significa true, ya que $d es un String vacio 

echo"<br />";

$e = 0.0; // el valor devuelto por empty($e);
echo empty($e); // devuelve 1, verdadero,  $e es un float con valor 0.0

echo"<br />";

$f = 0; // el valor devuelto por empty($f);
echo empty($f); // devuelve 1;  se verdadero, se trata de un entero con valor 0

echo"<br />";


$g = false; // el valor devuelto por empty($g);
echo empty($g);  // true,  es un booleano con valor false

echo"<br />";


$h; // el valor devuelto por empty($h);
echo empty($h); // true, es una variable no definida

echo"<br />";

$i = "0"; // el valor devuelto por empty($i);
echo empty($i);  // devuelve true, verdadero, es una cadena vacia

echo"<br />";

$j = "0.0";  // el valor devuelto por empty($j);
echo  empty($j);  // devuelve false, es una cadena no vacia

echo"<br />";

$k = true; // el valor devuelto por isset($k);
echo isset($k); //1, verdadero, k está definido, insert determina si una variable está definida

echo"<br />";

$l = false; // el valor devuelto por isset($l);
echo isset($l);  // verdadero, l está definido, insert determina si una variable está definida

echo"<br />";


$m = true; // el valor devuelto por is_numeric($m);
echo is_numeric($m); // false, se trata de un boolean y no de un número 

echo"<br />";

$n = ""; // el valor devuelto por is_numeric($n);
echo is_numeric($n); // false, es una cadena vacia, va entre "", no es un número 

?>