<?php


namespace App\Controller;


use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class homeController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(UserRepository $repository)
    {
        return $this->render('base.html.twig');
    }
}