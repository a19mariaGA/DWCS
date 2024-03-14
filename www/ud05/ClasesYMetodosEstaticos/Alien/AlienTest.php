<?php

require_once 'Alien.php';


$alien1 = new Alien('Alien1');
$alien2 = new Alien('Alien2');
$alien3 = new Alien('Alien3');


echo 'Número de aliens: ' . Alien::getNumberOfAliens();

?>