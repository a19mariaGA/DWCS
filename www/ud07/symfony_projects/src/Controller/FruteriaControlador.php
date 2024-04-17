<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class FruteriaControlador extends AbstractController{

  

        #[Route('/')]
        public function homepage()
        {

            $frutas = [
                "Fresa",
                "Pera",
                "Mango",
                "Limón"
            ];

            return $this->render("fruteria/homepage.html.twig", [
                "comentario" => "Disfruta de nuestras frutas de temporada",
                "frutas" => $frutas,
            ]);
        }
  


    #[Route('/listaTiendas/{slug}')]
    public function listar(String $slug=null){
        return $this ->render ("fruteria/listaTiendas.htlml.twig");

    }


    #[Route('/listaOfertas/{slug}')]
    public function listaOfertas(String $slug=null){
        return $this ->render ("fruteria/listaOfertas.htlml.twig");

    }


}


?>