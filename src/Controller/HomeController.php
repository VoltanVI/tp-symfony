<?php

namespace App\Controller;

use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index() : \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('index.html.twig');
    }

    #[Route('/discover', name: 'discover')]
    public function discover() : \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('movie/discover.html.twig');
    }

}
