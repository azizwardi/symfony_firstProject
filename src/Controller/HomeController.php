<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home/{variable}', name: 'app_home')]
    public function index($variable)
    {
        return new Response("bonjour ".$variable);
        
    }
}
