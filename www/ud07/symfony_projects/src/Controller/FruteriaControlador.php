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
    
            $coruña = [
                "Calle Real",
                "Calle de la Estrella",
                "Calle Juan Flórez"
            ];
    
    
            $santiago = [
                "Rúa do Franco",
                "Rúa do Vilar",
                "Rúa do Horreo"
            ];
    
    
            return $this ->render ("fruteria/listaTiendas.htlml.twig",[
    
                "coru" => "CORUÑA",
                "tiedasCoruña" => $coruña,
                "santi" => "SANTIAGO",
                "tiendasSantiago" => $santiago,
            ]);
    
    
        }
    
    
    #[Route('/listaOfertas/{slug}')]
    public function listaOfertas(string $slug = null)
    {
        $ofertas = [
            ['fruta' => 'Manzana', 'precio' => '1.50€'],
            ['fruta' => 'Naranja', 'precio' => '1.20€'],
            ['fruta' => 'Plátano', 'precio' => '0.80€'],

        ];

        return $this->render("fruteria/listaOfertas.html.twig", [
            'ofertas' => $ofertas,
        ]);
    }



}


?>