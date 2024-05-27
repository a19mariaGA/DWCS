<?php
require("lib/utilidades.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = test_input($_POST["NombreUsuario"]);
    $contraseña = test_input($_POST["Contraseña"]);

    $conn = conectar();
    try {
        $sql = "INSERT INTO administradores (NombreUsuario, Contraseña)
                VALUES ('$nombre_usuario', '$contraseña')";
        $conn->exec($sql);

        echo "<b>Administrador registrado correctamente </b></br></br>";

        $stmt = $conn->prepare("SELECT * FROM administradores");
        $stmt->execute();

        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($resultado as $adm) { 
            echo "<b>Nombre del Administrador: </b>" . $adm['NombreUsuario'] . " <b>     Contraseña: </b>" . $adm['Contraseña'] . "</br>";
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
}
?>






