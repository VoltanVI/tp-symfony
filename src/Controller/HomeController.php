<?php

namespace App\Controller;

use App\Repository\CategoriesRepository;
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
    public function discover(CategoriesRepository $categoriesRepository) : \Symfony\Component\HttpFoundation\Response
    {
        $categories = $categoriesRepository->findAll();
        return $this->render('movie/discover.html.twig', [
            'categories' => $categories
        ]);
    }

    #[Route('/abonnements', name: 'abonnements')]
    public function abonnements() : \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('movie/abonnements.html.twig');
    }

    #[Route('/lists', name: 'list')]
    public function list() : \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('movie/lists.html.twig');
    }

    #[Route('/admin', name: 'admin')]
    public function admin() : \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('admin/admin.html.twig');
    }

    #[Route('/admin_films', name: 'admin_films')]
    public function admin_films() : \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('admin/admin_films.html.twig');
    }

}
