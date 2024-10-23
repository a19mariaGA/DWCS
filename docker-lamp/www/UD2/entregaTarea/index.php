<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD2. Tarea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <header header class="bg-primary text-white text-center py-3">

    <?php

    echo "<h1>UD2 - Maria Gonzalez Antelo</h1>";
    echo "<h2>Esta es la tarea de la unidad 2</h2>";
    ?>

    </header>

    <div class="container-fluid">
        <div class="row">
            
        
            <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">
                        Home
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="">
                        Mis Tareas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">
                        Nueva tarea
                        </a>
                    </li>
                </ul>
            </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h2>Un poquito sobre mi</h2>
                </div>
                <div class="container">
                    <p>Mi nombre es Maria, vivo en Santiago de Compostela y trabajo como técnico de sistema.</br>
                        Esta es la última asignatura que me falta para teminar el módulo de DAW. 
                    </p>
                </div>
            </main>
        </div>
    </div>
    
    <footer class="bg-dark text-white text-center py-3">

    <?php
    echo "<p>&copy; " . date("Y") . " Maria Gonzalez Antelo. Todos los derechos reservados.</p>";
    ?>

    </footer>
</body>
</html>