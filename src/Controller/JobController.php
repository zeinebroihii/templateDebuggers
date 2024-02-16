<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobController extends AbstractController
{
    #[Route('/job', name: 'app_job')]
    public function index(): Response
    {
        return $this->render('job/index.html.twig', [
            'controller_name' => 'JobController',
        ]);
    }

    #[Route('/jobpost', name: 'app_jobpost')]
    public function post(): Response
    {
        return $this->render('job/post.html.twig', [
            'controller_name' => 'JobController',
        ]);
    }
}
