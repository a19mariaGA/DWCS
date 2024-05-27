<?php


// función para poder conectar directamente desde el resto de ficheros
function conectar() {
    $servername = "db";
    $username = "root";
    $password = "test";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=donacion", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $conn->exec('USE donacion');

        return $conn;  // Devuelve la conexión para que se pueda utilizar fuera de esta función

    } catch(PDOException $e) {
        echo "Error al intentar conectar <br><br>" . $e->getMessage();
        return null;
    }
}

//función para validar datos de entrada 
function test_input($dato) {
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}




?>