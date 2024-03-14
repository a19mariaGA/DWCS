<?php
/*
En un *string*, tenemos almacenados varios datos agrupados en ciudad, país y continente.
El formato es `ciudad,pais,continente` y cada grupo *ciudad-pais-continente* se separa co un `;`.

$informacion = "Tokyo,Japan,Asia;Mexico City,Mexico,North America;New York City,USA,North America;Mumbai,India,Asia;Seoul,Korea,Asia;Shanghai,China,Asia;Lagos,Nigeria,Africa;Buenos Aires,Argentina,South America;Cairo,Egypt,Africa;London,UK,Europe";

Crea una aplicación PHP que imprima toda la información almacenada en el *string* en una tabla con 3 columnas.
Con la información anterior, realiza las seguintes tareas:
1. Crea la estrutura de datos y almacena toda la información anterior.
2. Utilizando a instrución `foreach` y listas HTML,  imprime toda la información almacenada en formato de tabla.
*/

?>


<!DOCTYPE html>
<html >
<head>>
    <title>Tabla tarea.4  </title>
</head>
<body>

<?php

$informacion = "Tokyo,Japan,Asia;Mexico City,Mexico,North America;New York City,USA,North America;Mumbai,India,Asia;Seoul,Korea,Asia;Shanghai,China,Asia;Lagos,Nigeria,Africa;Buenos Aires,Argentina,South America;Cairo,Egypt,Africa;London,UK,Europe";

$grupos = explode(";", $informacion);
$arrayInformacion = [];

foreach ($grupos as $grupo) {
    list($ciudad, $pais, $continente) = explode(",", $grupo);
    $arrayInformacion[] = [
        'ciudad' => $ciudad,
        'pais' => $pais,
        'continente' => $continente,
    ];
}
?>

<table>
    <tr>
        <th>Ciudad</th>
        <th>País</th>
        <th>Continente</th>
    </tr>
    <?php foreach ($arrayInformacion as $info): ?>
        <tr>
            <td><?php echo $info['ciudad']; ?></td>
            <td><?php echo $info['pais']; ?></td>
            <td><?php echo $info['continente']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>


</body>
</html>