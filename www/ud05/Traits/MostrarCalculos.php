<?php
trait MostrarCalculos {
  
    

    public function saludar() {
        
        echo 'Bienvenido al centro de cálculo <br>';
    }


    public function showCalculusStudyCenter($aprobados,$suspensos , $media){
        

        echo "Aprobados: " .$aprobados."<br>";
        echo "Suspendos: " .$suspensos. "<br>";
        echo "Media: ".  $media. "<br><br>";
    
    }

}
?>