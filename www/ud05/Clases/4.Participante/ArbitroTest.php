<?php
    
    include 'Arbitro.php';


    $arbitro1= new Arbitro("Antonio", 33, 5 );
    $arbitro2= new Arbitro("Juan", 44, 10);


    echo "Mostrar información de los arbitros:<br><br>";

    echo '<br>Nombre: '.$arbitro1->getNombre();
    echo '<br>Edad: '.$arbitro1->getEdad();
    echo '<br>Años Arbitraje: '.$arbitro1->getAñosArbitrando().'<br>';


    echo '<br>Nombre: '.$arbitro2->getNombre();
    echo '<br>Edad: '.$arbitro2->getEdad();
    echo '<br>Años Arbitraje: '.$arbitro2->getAñosArbitrando();


    echo '<br><br>Editamos los datos del primer arbritro a traves de los set: <br>';
    $arbitro1->setNombre("Jorge");
    $arbitro1 -> setEdad (46);
    $arbitro1-> setAñosArbitrando(14);

    echo '<br>Nombre: '.$arbitro1->getNombre();
    echo '<br>Edad: '.$arbitro1->getEdad();
    echo '<br>Años Arbitraje: '.$arbitro1->getAñosArbitrando().'<br>';
    
    
?>