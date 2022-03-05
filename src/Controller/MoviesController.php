<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    //#[Route('/movies/{name}', name: 'app_movies',defaults:['name' => null], methods:['GET','HEAD'])]
    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
        $movie = ["Game of throne","Breaking Bad","Mr Robot","Frozen"];
        //return $this->json([
            //'message' => $name,
            //'path' => 'src/Controller/MoviesController.php',
        //]);
        return $this->render('index.html.twig',
            //'title' => 'Movies',
            array(
                'movies' => $movie
            ));
    }
    
}
