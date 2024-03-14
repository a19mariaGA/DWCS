<?php
function compruebaExtension($imagen) {

    if($imagen != "jpg" && $imagen != "png" && $imagen != "jpeg"
    && $imagen != "gif" ) {
      
      return false;
    }
    return true;
}


function comprobarTamanho($imagen) {
    $maxSize = 50 * 1024 * 1024; // 50MB en bytes

    if ($imagen > $maxSize) {
        
        return false;
    }

    return true;
}
?>