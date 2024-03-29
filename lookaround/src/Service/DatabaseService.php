<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Visite;

class DatabaseService
{
    public function __construct(private $entityManager){
        $this->entityManager = $entityManager;
    }

    public function getListeVisites(): array
    {
        $repository = $this->entityManager->getRepository(Visite::class);
        $visites = $repository->findAll();
        $visitesArray = [];
        foreach ($visites as $visite) {
            $visitesArray[] = [
                'id' => $visite->getId(),
                'urlVitrine' => $visite->getUrlVitrine(),
                'urlAccess' => $visite->getUrlAccess(),
                'typeVisite' => $visite->getTypeVisite(),
                'companyName' => $visite->getCompanyName(),
                'companyAddress' => $visite->getCompanyAddress(),
                'companyNPA' => $visite->getCompanyNPA()
            ];
        }
        return $visitesArray;
    }

    public function isVisiteExisting($id) : array
    {
        $repository = $this->entityManager->getRepository(Visite::class);
        $entity = $repository->find($id);

        if ($entity !== null)
            return ["exists" => true, "url" => $entity->getUrlAccess()];
        else
            return ["exists" => false];
    }
}


