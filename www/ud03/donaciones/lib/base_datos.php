<?php

function get_conexion(){

    $servername = "db";
    $username = "root";
    $password = "test";



    try {
        
        $conn = new PDO("mysql:host=$servername", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        echo  "Conexión creada correctamente <br>";   // echo no puede ir después de return 
        return $conn;

            
        } catch(PDOException $e) {

            echo "Error al crear la conexión: " . $e->getMessage() . "<br>";
        }

       

    }


    function crear_bd_donacion($conn){

        try {
            
            // Crear la base de datos si no existe
            $sql = "CREATE DATABASE IF NOT EXISTS donacion";
            $conn->exec($sql);

            echo "BD donación creada correctamente<br>";
        } catch(PDOException $e) {
            echo  "Error al crear la BD donación<br>";
        }
       $conn= null; 
      
    }


    function seleccionar_bd_donacion($conn){
        try {
            
            $conn->exec('USE donacion');;
    
             echo "BD donación seleccionada correctamente<br>";
        } catch(PDOException $e) {
             echo  "Error al seleccionar la BD donación<br>";
        }
    }
    

    function crear_tabla_donantes($conn){


        try {
            
             // Crear tabla donantes si no existe
             $sql = "CREATE TABLE IF NOT EXISTS donantes (
             id INT PRIMARY KEY,
             Nombre VARCHAR(50) NOT NULL,
             Apellidos VARCHAR(50) NOT NULL,
             Edad INT CHECK(Edad > 18) NOT NULL,
             GrupoSanguineo VARCHAR(5) NOT NULL,
             CodigoPostal INT CHECK(LENGTH(CodigoPostal) = 5) NOT NULL,
             TelefonoMovil INT CHECK(LENGTH(TelefonoMovil) = 9) NOT NULL
             )";
    
            $conn->exec($sql);
             echo "Tabla donantes creada<br>";

        } catch(PDOException $e) {
             echo  "Error al crear la tabla donantes<br>";
        }

        $conn= null; 
    }

    function crear_tabla_historico($conn){


        try {
            
                 // Crear tabla historico si no existe
            $sql = "CREATE TABLE IF NOT EXISTS historico (
            id INT PRIMARY KEY AUTO_INCREMENT,
            Donante INT,
            FechaDonacion DATE,
            FechaProximaDonacion DATE,
            FOREIGN KEY (Donante) REFERENCES donantes(id)
            )";
            $conn->exec($sql);

            echo "Tabla historico creada<br>";

        } catch(PDOException $e) {
            echo  "Error al crear la tabla donación<br>";
        }

       $conn= null; 

    }
 
    function crear_tabla_administradores($conn){


        try {
            
           // Crear tabla administradores si no existe
            $sql = "CREATE TABLE IF NOT EXISTS administradores (
            NombreUsuario VARCHAR(50) PRIMARY KEY,
            Contraseña VARCHAR(200) NOT NULL
            )";
            $conn->exec($sql);

            echo "Tabla administradores creada<br>";
           } catch(PDOException $e) {
            echo  "Error al crear la tabla administradores<br>";
           }

          $conn= null; 
    }
    


?>
