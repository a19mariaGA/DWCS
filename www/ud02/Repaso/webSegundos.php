<!DOCTYPE html>
<html lang="es">
<head>

    <title>Tarea 2.1 Expresiones</title>
</head>
<body>

    
    <form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        
        <label for="segundos">Introduce los segundos:</label>
        <input type="number" name="segundos" required>
        <button type="submit">Convertir</button>

    </form>

    <?php

  

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $segundos = $_POST["segundos"];


        $semanas =floor($segundos / (7 * 24 * 60 * 60));;
        $dias= floor($segundos  / (24 * 60 * 60));
        $horas= floor( $segundos/3600);
        $minutos= floor( $segundos/60); 
         
        
        

        echo "Segundos: $segundos <br>";
        echo "Semanas: $semanas  <br>";
        echo "Dias: $dias <br>";
        echo "Horas: $horas <br>";
        echo "Minutos: $minutos <br>";
        
    }

    ?>

  


</body>
</html>
