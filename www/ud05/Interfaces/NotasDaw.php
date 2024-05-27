<?php

include ("Notas.php");
include("CalculosCentroEstudios.php");

class NotasDaw extends Notas implements CalculosCentroEstudios {


    public function toString()
    {
        $listaDeNotas = "";
        foreach ($this->getNotas() as $nota) {
            $listaDeNotas .= "[$nota]";
        }
        return $listaDeNotas;
    }


    public function numeroDeAprobados(){
        $cont=0;
        foreach(parent::getNotas() as $key => $nota){
            if($nota>=5){
                $cont++;
            }
        }
        return $cont;
    }




        public function numeroDeSuspensos(){
            $cont=0;
            foreach(parent::getNotas() as $nota){
                if($nota<5){
                    $cont++;
                }
            }
            return $cont;
        }

        public function notaMedia(){
            $numNotas = count(parent::getNotas());
            if($numNotas!=0){
                $sumaNotas = array_sum(parent::getNotas());
            $notaMedia=$sumaNotas/$numNotas;
            }else{
                $notaMedia=0;
            }

            return $notaMedia;
        }

 
}
?>