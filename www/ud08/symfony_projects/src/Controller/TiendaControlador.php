<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;


class TiendaControlador extends AbstractController{

  
    #[Route('/')]
    public function homepage()
    {

        $frutas = [
            ["nombre" => "Fresa", "imagen" => "imagenes/fresas.jpg"],
            ["nombre" => "Pera", "imagen" => "imagenes/peras.jpeg"],
            ["nombre" => "Mango", "imagen" => "imagenes/mangos.jpeg"],
            ["nombre" => "Limón", "imagen" => "imagenes/limones.jpeg"],
        ];

        return $this->render("fruteria/homepage.html.twig", [
            "comentario" => "Disfruta de nuestras frutas de temporada",
            'frutas' => $frutas,
        ]);
    }
  

        #[Route('/listaTiendas/{slug}')]
        public function listar(String $slug=null){
    
            $coruña = [
                "Calle Real  32",
                "Calle de la Estrella  54",
                "Calle Juan Flórez  22"
            ];
    
    
            $santiago = [
                "Rúa do Franco  43",
                "Rúa do Vilar  12",
                "Rúa do Horreo 12"
            ];
    
    
            return $this ->render ("fruteria/listaTiendas.html.twig",[
    
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
            ['fruta' => 'Plátano', 'precio' => '2.80€'],

        ];

        return $this->render("fruteria/listaOfertas.html.twig", [
            'texto'=>"Lista de ofertas de hoy",
            'ofertas' => $ofertas,
        ]);
    }



   

    #[Route('/listaAnimales/{slug}')]
    public function mascotas(HttpClientInterface $httpClient, string $slug = null): Response
    {

        $response = $httpClient->request('GET', 'https://raw.githubusercontent.com/sabelassm/json-example/master/animals-1.json');
        $animales = $response->toArray();


        return $this->render("animales/listaAnimales.html.twig", [
           'animales' => $animales,
           
        ]);
    }


}


?>