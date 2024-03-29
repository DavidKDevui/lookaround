<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Service\DatabaseService;

class DatabaseController extends AbstractController
{
    #[Route('/isVisiteExisting', name: 'isVisiteExisting', methods: ['POST'])]
    public function isVisiteExisting(DatabaseService $databaseService, Request $request) : JsonResponse
    {
        $requestData = json_decode($request->getContent(), true);
        return new JsonResponse($databaseService->isVisiteExisting($requestData['id']));
    }
}