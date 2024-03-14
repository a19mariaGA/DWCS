
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Calculadora</title>
<style>
label
{
    width: 4em;
    float: left;
    text-align: right;
    margin-right: 0.5em;
    display: block;
}

.submit input
{
    margin-left: 4.5em;
}
input
{
    color: #781351;
    background: #fee3ad;
    border: 1px solid #781351;
    width: 40px;
}

input.submit
{
    color: #000;
    background: #ffa20f;
    border: 2px outset #d7b9c9;
    width: 90px;
}
fieldset
{
    border: 1px solid #781351;
    width: 20em
}

legend
{
    color: #fff;
    background: #ffa20c;
    border: 1px solid #781351;
    padding: 2px 6px;
}
</style>
</head>
<body>
<form name="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset>
<legend>Calculadora</legend>
    <p><label for="campo1">Núm 1:</label><input name="campo1" value="" /></p>
    <p><label for="campo2">Núm 2:</label><input name="campo2" value="" /></p>
    <p><label for="campo3">Núm 3:</label><input name="campo3" value="" /></p>
    <p><label for="campo4">Núm 4:</label><input name="campo4" value="" /></p>
    <input type="submit" class="submit" name="enviar" value="Calcular" />
</fieldset>
</form>


<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

 
    
    $num1 = isset($_POST["campo1"]) ? $_POST["campo1"] : 0;
    $num2 = isset($_POST["campo2"]) ? $_POST["campo2"] : 0;
    $num3 = isset($_POST["campo3"]) ? $_POST["campo3"] : 0;
    $num4 = isset($_POST["campo4"]) ? $_POST["campo4"] : 0;

    
    if (!empty($num1) && !empty($num2) && !empty($num3) && !empty($num4) &&
        is_numeric($num1) && is_numeric($num2) && is_numeric($num3) && is_numeric($num4)) {

    
            
        $sumaTotal = $num1 + $num2 + $num3 + $num4;
        $multiplicacion = $num1 * $num2 * $num3 * $num4;
        $division = $num1 / $num3 ;
        $resto = $num1 % $num2 ;
        $esMayor = ($num1 > $num3) ? "Sí" : "No";

    
        echo "Números: $num1, $num2, $num3, $num4<br>";
        echo "Suma: $sumaTotal<br>";
        echo "Multiplicación: $multiplicacion<br>";
        echo "División entre el primer y tercer número: $division<br>";
        echo "Resto entre num1 y num2: $resto<br>";
        echo "¿El primer número es mayor que el tercero? $esMayor";
    } else {
        echo "Por favor, ingresa números válidos en todos los campos.";
    }
}


?>


    



</body>
</html>



