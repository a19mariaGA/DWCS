<?php


trait CalculosCentroEstudios2 {
 
    public function numeroDeAprobados(){
        parent::numeroDeAprobados();
        $cont=0;
        foreach(parent::getNotas() as $key => $nota){
            if($nota>=5){
                $cont++;
            }
        }
        return $cont;
    }




        public function numeroDeSuspensos(){
            parent::numeroDeSuspensos();
            $cont=0;
            foreach(parent::getNotas() as $nota){
                if($nota<5){
                    $cont++;
                }
            }
            return $cont;
        }

        public function notaMedia(){
            parent::notaMedia();
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