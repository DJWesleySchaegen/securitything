<?php


namespace App\Controller;


use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class homeController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(UserRepository $repository)
    {
    }
}