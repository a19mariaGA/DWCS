<?php

function get_conexion(){
    $servername = "db";
    $username = "root";
    $password = "test";

    try {
        // creamos la conexión 
        $conn = new PDO("mysql:host=$servername", $username, $password);

        // capturamos el error en caso de no poder crear la conexión 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Conexión creada correctamente <br>";

        return $conn; // devolve a conexión 

    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        return null; // Devolvemos null en caso de error
    }
  

}

function crear_bd_tienda($conn){
    // Creamos la base de datos, en caso de que no exista
    $sql = "CREATE DATABASE IF NOT EXISTS tienda";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Base de datos creada correctamente<br>";

    $conn= null; 
}

function seleccionar_bd_tienda($conn){
    // seleccionamos la bbdd creada
    $conn->exec('USE tienda');
    echo "Base de datos seleccionada<br>";
}

function crear_tabla_usuario($conn){
    $sql = "CREATE TABLE IF NOT EXISTS usuarios(
        id INT(6) AUTO_INCREMENT PRIMARY KEY, 
        nombre VARCHAR(50) ,
        apellido VARCHAR(100) , 
        edad INT, 
        provincia VARCHAR(50)
        )";

    $conn->exec($sql);
    echo "La tabla fue creada correctamente";

    $conn= null; 
}

?>