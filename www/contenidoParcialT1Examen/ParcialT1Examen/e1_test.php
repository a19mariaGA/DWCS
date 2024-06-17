<?php
require "e1.php";

$string="hola soy un función";


$total=contarVocales($string);

 echo  "$total"; 


 echo  "</br>";
 echo  "</br>";

 $total2=sanear_string($string);

 echo var_dump($total2);

 echo  "</br>"; 
 echo  "</br>";

 $total3=sanear_string2($string);

 echo var_dump($total3);




?>