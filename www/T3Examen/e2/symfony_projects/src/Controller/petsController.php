<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\Cache\CacheInterface;
//use Symfony\Contracts\Cache\CacheItemInterface;
use Psr\Cache\CacheItemInterface; 

class petsController extends AbstractController
{
    #[Route('/pets')]
    public function pets(HttpClientInterface $httpClient, CacheInterface $cache, string $slug = null): Response
    {

        $pets = $cache->get('animales_data', function (CacheItemInterface $cacheItem) use ($httpClient) {

            $cacheItem->expiresAfter(10); 
            
            $response = $httpClient->request('GET', 'pets.json');
            return $response->toArray();

        });


    }
}

?>
