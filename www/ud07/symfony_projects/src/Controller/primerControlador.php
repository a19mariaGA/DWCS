<?php

namespace APP\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class primerControlador{


#[Router('/')]
    public function homepage(){
        return  new Response("");

    }

    public function segunda(){
        
    }


    public function tercera(){
        
    }


}


?>