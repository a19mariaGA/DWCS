<?php

function test_input($dato) {
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}



// función para poder conectar directamente desde el resto de ficheros
function conectar() {
    $servername = "db";
    $username = "root";
    $password = "test";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=tienda", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $conn->exec('USE tienda');

        return $conn;  // Devuelve la conexión para que se pueda utilizar fuera de esta función

    } catch(PDOException $e) {
        echo "Error al intentar conectar <br><br>" . $e->getMessage();
        return null;
    }
}


function insertar_datos($conn, $nombre, $apellido, $edad, $provincia) {
    try {
        $sql = "INSERT INTO usuarios (nombre, apellido, edad, provincia) VALUES ('$nombre', '$apellido', $edad, '$provincia')";

        $conn->exec($sql);
        echo "<br><br><b><p>Se ha insertado correctamente el cliente en la tabla </p></br></br></b>";
        
    } catch (PDOException $e) {
        echo "<br><br><b><p>Error al insertar datos: </p></br></br></b> " . $e->getMessage();
    }
}

?>