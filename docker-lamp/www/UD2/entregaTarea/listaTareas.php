<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de elementos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="table container mt-4">

    <table class="table table-striped table-hover">
        <thead class="thead">
            <tr>                            
                <th>Identificador</th>
                <th>Descripción</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
                 include_once('utils.php');

                // Supongamos que la función mostrar() devuelve un array de tareas
                $tareas = mostrar();

                // Recorremos el array de tareas y mostramos cada una en una fila
                foreach ($tareas as $tarea) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($tarea['titulo']) . "</td>";
                    echo "<td>" . htmlspecialchars($tarea['contenido']) . "</td>";
                    echo "<td>" . htmlspecialchars($tarea['estado']) . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>
 
</body>
</html>
