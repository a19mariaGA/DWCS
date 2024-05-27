<?php
    // Obtener conexión
    include("lib/base_datos.php");
    $conexion = get_conexion();
    seleccionar_bd_tienda($conexion);

    function editar_tabla_usuarios($conexion)
    {
        try {
            $sql = "ALTER TABLE usuarios
                    ADD COLUMN password VARCHAR(50) AFTER nombre";
            
            $conexion->query($sql);
            
            echo "La tabla usuarios fue editada correctamente";
        } catch (PDOException $e) {
            echo "Error al editar la tabla: " . $e->getMessage();
        } finally {
            // No es necesario cerrar la conexión aquí, ya que PHP lo hará automáticamente al salir de la función.
        }
    }

    editar_tabla_usuarios($conexion);
?>
