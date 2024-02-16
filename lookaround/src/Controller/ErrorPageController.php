<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ErrorPageController extends AbstractController
{
    public function error404(Request $request)
    {
        //return $this->render('404.html.twig', [], new Response('', 404));
        return $this->redirectToRoute("index");
    }
}
