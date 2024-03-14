<html>
    <head>
        <meta charset="utf-8">
        <title>HTML</title> 
    </head>
    <body>
        <div>
            <!-- Crea un formulario para solicitar una de las siguientes bebidas:

    Bebida|PVP
    :-|:-:
    Coca Cola|1 €
    Pepsi Cola|0,80 €
    Fanta Naranja|0,90 €
    Trina Manzana|1,10 € 

     A mayores, necesitamos un campo adicional con la cantidad de bebidas a comprar y un botón de <kbd>Solicitar</kbd>.
-->

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <label for="bebida">Selecciona una bebida:</label>

    <select name="bebida">
        <option value="Coca Cola">Coca Cola |1 € </option>
        <option value="Pepsi Cola">Pepsi Cola | 0,80 €</option>
        <option value="Fanta Naranja">Fanta Naranja | 0,90 € </option>
        <option value="Trina Manzana">Trina Manzana | 1,10 € </option>
    </select>

    <br><br>

    <label for="cantidad">Cantidad:</label>
    <input type="number" name="cantidad">

    <br><br>

    <input type="submit" value="Solicitar">
</form>





<?php 


    //La aplicación mostrará algo como:
   // Pediste 3 botellas de Coca Cola. Precio total a pagar: 3 Euros.
   // Puedes utilizar sentencias `switch` o `if`.

   if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
    $bebida = $_POST["bebida"];
    $cantidad = $_POST["cantidad"];

    
    switch ($bebida) {
        case "Coca Cola":
            $precio = 1;
            break;
        case "Pepsi Cola":
            $precio = 0.8;
            break;
        case "Fanta Naranja":
            $precio = 0.9;
            break;
        case "Trina Manzana":
            $precio = 1.10;
            break;
        default:
            $precio = 0;
    }

   
    $precio_total = $precio * $cantidad;

                
    echo "Pediste $cantidad botellas de $bebida. Precio total a pagar: $precio_total Euros.";



   }
?>
</body>
</html>