<?php
    include 'Jugador.php';
  


    $jugardor1= new Jugador("Luis", 38, "Delantero");
    $jugardor2= new Jugador("Fran", 37, "Portero");


    echo "Mostrar información de los jugadores:<br><br>";

    echo '<br>Nombre: '.$jugardor1->getNombre();
    echo '<br>Edad: '.$jugardor1->getEdad();
    echo '<br>APosicion: '.$jugardor1->getPosicion().'<br>';


    echo '<br>Nombre: '.$jugardor2->getNombre();
    echo '<br>Edad: '.$jugardor2->getEdad();
    echo '<br>APosicion: '.$jugardor2->getPosicion().'<br>';


    echo '<br>Editamos los datos del segundo jugador a traves de los set: <br>';
    $jugardor2->setNombre("Oscar");
    $jugardor2 -> setEdad (46);
    $jugardor2->setPosicion("Defensa");

    echo '<br>Nombre: '.$jugardor2->getNombre();
    echo '<br>Edad: '.$jugardor2->getEdad();
    echo '<br>APosicion: '.$jugardor2->getPosicion().'<br>';
    
    
?>