<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ErrorPageController extends AbstractController
{
    
    public function error404(): Response
    {
        return $this->redirectToRoute("index");
    }
}
