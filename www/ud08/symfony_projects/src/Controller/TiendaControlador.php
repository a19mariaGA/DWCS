<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\Cache\CacheInterface;
//use Symfony\Contracts\Cache\CacheItemInterface;
use Psr\Cache\CacheItemInterface; 

class TiendaControlador extends AbstractController
{
    #[Route('/listaAnimales/{slug}')]
    public function mascotas(HttpClientInterface $httpClient, CacheInterface $cache, string $slug = null): Response
    {

        $animales = $cache->get('animales_data', function (CacheItemInterface $cacheItem) use ($httpClient) {

            $cacheItem->expiresAfter(10); 
            
            $response = $httpClient->request('GET', 'https://raw.githubusercontent.com/sabelassm/json-example/master/animals-1.json');
            return $response->toArray();

        });

        return $this->render("animales/listaAnimales.html.twig", [
            'animales' => $animales,
        ]);
    }
}

?>
