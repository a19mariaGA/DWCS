<!DOCTYPE html>
<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

    <form action="nueva.php" method="POST" class="mb-5">

         <div class="mb-3">
             
            <label for="titulo" class="form-label">Título de la tarea</label>
            <input type="text" name="titulo" class="form-control" id="titulo" >
           
        </div>
            
        <div class="mb-3">
            
            <label for="contenido" class="form-label">Aquí va el contenido</label>
            <textarea name="contenido" class="form-control" id="contenido" rows="3" ></textarea>
            
        </div>
            
        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>

</body>
</html>