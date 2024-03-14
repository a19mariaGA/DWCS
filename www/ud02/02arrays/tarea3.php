<?php 

/*
1. Crea una matriz con 30 posiciones y que contenga números aleatorios entre 0 y 20 (inclusive).
Uso de la función [rand](https://www.php.net/manual/es/function.rand.php). 
Imprima la matriz creada anteriormente.
*/ 


$numero_aleatorio = array();

for ($i = 0; $i < 30; $i++) {
    $numero_aleatorio[$i] = rand(0, 20);
    echo $numero_aleatorio[$i] . "<br>";
}




/* 
2. (Optativo) Cree una matriz con los siguientes datos: 
`Batman`, `Superman`, `Krusty`, `Bob`, `Mel` y `Barney`.
    - Elimine la última posición de la matriz. 
    - Imprima la posición donde se encuentra la cadena 'Superman'. 
    - Agregue los siguientes elementos al final de la matriz: `Carl`, `Lenny`, `Burns` y `Lisa`. 
    - Ordene los elementos de la matriz e imprima la matriz ordenada. 
    - Agregue los siguientes elementos al comienzo de la matriz: `Apple`, `Melon`, `Watermelon`.
*/
echo  "<br>", "<br>", "<br>";

$datos = ['Batman', 'Superman', 'Krusty', 'Bob', 'Mel', 'Barney' ];

foreach($datos as $dato){
    echo $dato.' ';
}

echo  "<br>";

unset($datos[5]);

foreach($datos as $dato){
    echo $dato.' ';
}

echo  "<br>";


echo "La posición en la que está Superman es:". array_search('Superman', $datos);

echo  "<br>";

$datos = array_merge($datos , array('Carl', 'Lenny', 'Burns', 'Lisa'));

foreach($datos as $dato){
    echo $dato.' ';
}


echo  "<br>";

sort($datos);

foreach($datos as $dato){
    echo $dato.' ';
}

echo  "<br>";


array_unshift($datos, 'Apple', 'Melon', 'Watermelon');

foreach($datos as $dato){
    echo $dato.' ';
}


/*3. (Optativo) Cree una copia de la matriz con el nombre `copia` con elementos del 3 al 5.
    - Agregue el elemento 'Pera' al final de la matriz. */ 

    echo  "<br>", "<br>", "<br>";

    $copia = array_slice($datos, 2, 3);  

    foreach($copia as $cp){
        echo $cp.' ';
    }

    echo  "<br>";

    $copia = array_merge($copia , array( 'Pera' ));

    foreach($copia as $cp){
        echo $cp.' ';
    }

    
?>