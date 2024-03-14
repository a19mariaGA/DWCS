<?php

$productos = [
    "cocacola" => ["Nome" => "Coca Cola", "Prezo" => 2.1],
    "pepsicola" => ["Nome" => "Pepsi Cola", "Prezo" => 2],
    "fantanaranja" => ["Nome" => "Fanta Naranja", "Prezo" => 2.5],
    "trinamanzana" => ["Nome" => "Trina Manzana", "Prezo" => 2.3],
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    
    <title>Tarea 2.4 </title>
</head>
<body>

<form>
    <label for="opcion">Selecciona una bebida:</label>
    <select name="opcion">
        <?php foreach ($productos as $id => $producto): ?>
            <option value="<?= $id; ?>">
                <?= "{$producto['Nome']} ({$producto['Prezo']} €)"; ?>
            </option>
        <?php endforeach; ?>
    </select>
</form>

</body>
</html>
