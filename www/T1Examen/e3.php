

<!DOCTYPE html>
<html >
<head>>
    <title>Tabla tarea.4  </title>
</head>
<body>


<?php

$coches =array (
    array ("Volvo", 22.18),
    array ("BMW", 15, 13),
    array ("Saab", 5,2),
    array ("Land rover", 17, 15)
);
    


foreach ($coches as  $info) {
    echo "Nombre: {$info['Nombre']}<br>";
    echo "Stock: {$info['Stock']}<br>";
    echo "Ventas: {$info['Ventas']}<br>";

}


?>

<table>
    <tr>
        <th>Nombre</th>
        <th>Stock</th>
        <th>Ventas</th>
    </tr>

    <?php foreach ($arrayCoches as $info): ?>
        <tr>
            <td><?php echo $info['Nombre']; ?></td>
            <td><?php echo $info['Stock']; ?></td>
            <td><?php echo $info['Ventas']; ?></td>
        </tr>
    <?php endforeach; ?>
   
</table>


</body>
</html>