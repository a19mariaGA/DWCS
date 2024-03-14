<html>
    <head>
        <meta charset="utf-8">
        <title>HTML</title> 
    </head>
    <body>
         
        <div>
            <!-- Cree un formulario que solicite su nombre y apellido. -->

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" >

                    </br>

                <label for="apellido">Apellidos:</label>
                <input type="text" name="apellido" >

                    </br>

                <input type="submit" value="Enviar">
            </form>

        </div>

            <div>
                <?php 
                    // Cuando se reciben los datos, se debe mostrar la siguiente información:*/


                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        $nombre = $_POST["nombre"];
                        $apellido = $_POST["apellido"];



                     // Nombre: `xxxxxxxxx`
                
                        echo "Nombre: $nombre </br>";

                    // Apellidos: `xxxxxxxxx`

                        echo "Apellidos: $apellido </br>";

                    // Nombre y apellidos: `xxxxxxxxxxxx xxxxxxxxxxxx`
                    
                        echo "Nombre y apellidos: $nombre $apellido </br>"; 
                    
                    // Su nombre tiene caracteres `X`.

                        echo "Su nombre tiene " . strlen($nombre)." ". "caracteres <br>";
                    
                    // Los 3 primeros caracteres de tu nombre son: `xxx`
                    
                        echo "Los 3 primeros caracteres de tu nombre son: " . substr($nombre, 0, 3) . "<br>";
                    
                    //La letra A fue encontrada en sus apellidos en la posición: `X`
                    
                        $letraA = strpos($apellido, "A");
                        echo "La letra A fue encontrada en sus apellidos en la posición: " . ($letraA !== false ? $letraA : "Tus apellidos no tienen la letra A") . "<br>"; 


                    //La letra A fue encontrada en sus apellidos en la posición: `X` -- Sin que diferencia entre minusculas y mayusculas
                    
                        $letraA2 = stripos($apellido, "A");
                        echo "La letra A fue encontrada en sus apellidos en la posición: " . ($letraA2 !== false ? $letraA2 : "Tus apellidos no tienen la letra A") . "<br>"; 


                     //Tu nombre en mayúsculas es: `XXXXXXXXX`
                    
                        echo "Tu nombre en mayúsculas es: " . strtoupper($nombre) . "<br>";

                     // Sus apellidos en minúsculas son: `xxxxxx`
                    
                       echo "Sus apellidos en minúsculas son: " . strtolower($apellido) . "<br>";

                     // Su nombre y apellido en mayúsculas: `XXXXXX XXXXXXXXXX`
                    
                      echo "Su nombre y apellido en mayúsculas: " . strtoupper($nombre) ." ".strtoupper($apellido) . "<br>";

                    // Tu nombre escrito al revés es: `xxxxxx`
                   
                     echo "Tu nombre escrito al revés es: " . strrev($nombre) . "<br>";
                    
                    }
                ?>
        </div>
    </body>
</html>