

<!DOCTYPE html>
<html >
<head>
    <title>Tarea4</title>
</head>
<body>
    <h1>PHP Info</h1>
    <?php

/*Haz una página que ejecute la función phpinfo() y que muestre las principales variables de servidor mencionadas en teoría.
*/

// ES NECESARIO IR COMENTANDO Y DESCOMENTANDO PARA VER LA INFO


  /*    
  
       phpinfo();  // carga la pagina de php 
       echo"<br />";


       echo  phpinfo();  // muestra información sobre la configuración de php y todas las funciones
       echo"<br />";
       
       echo phpinfo(INFO_GENERAL);   // muestra información sobre los módulos
       echo"<br />";

       echo phpinfo(INFO_MODULES);   // muestra información sobre los módulos
       echo"<br />";

       echo  phpinfo(INFO_VARIABLES); // muestra información sobre los variables predefinidas
       echo"<br />";

       echo $_SERVER["SERVER_ADDR"];   // variable de servidor,  direccion ip desde la que accedo 
       echo"<br />";

       */

       echo $_SERVER["SERVER_ADDR"];   // variable de servidor,  direccion ip desde la que accedo 
       echo"<br />";

       echo $_SERVER["SERVER_NAME"];   //  nombre del host del servidor
       echo"<br />";

       echo $_SERVER["REMOTE_PORT"];   // puerto que se utiliza para comunicarse con el servidor 
       echo"<br />";

       echo $_SERVER["REQUEST_METHOD"];   // metodo que utilizo para acceder a la página 
       echo"<br />";

       echo $_SERVER["SERVER_PROTOCOL"];   // protocolo mediante el que se solicito la página
       echo"<br />";

    ?>
</body>
</html>