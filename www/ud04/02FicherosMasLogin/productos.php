<?php
    // Obtener conexión
     
    include("lib/base_datos.php");
    $conexion = get_conexion();
    seleccionar_bd_tienda($conexion);


    function crear_tabla_productos($conexion)
    {
        try {
            $sql = "CREATE TABLE IF NOT EXISTS productos(
                id INT(6) AUTO_INCREMENT PRIMARY KEY, 
                nombre VARCHAR(50),
                descripcion VARCHAR(100),
                precio FLOAT,
                unidades FLOAT,
                foto BLOB
            )";

            $conexion->query($sql);
            
            echo "La tabla productos fue creada correctamente";
        } catch (PDOException $e) {
            echo "Error al crear la tabla: " . $e->getMessage();
        } finally {
            $conexion = null;
        }
    }


    crear_tabla_productos($conexion);
    
?>
