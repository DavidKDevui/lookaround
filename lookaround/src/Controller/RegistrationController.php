<?php

namespace App\Controller;

use App\Entity\Clients;
use App\Entity\Commandes;
use App\Form\RegistrationFormType;
use App\Security\ClientsAuthenticator;
use DateTime;
use DateTimeImmutable;
use DateTimeZone;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\Null_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;


class RegistrationController extends AbstractController
{
/*
    #[Route('/updateCreneau', name: 'app_updateCreneau', methods: ['POST'])]
    public function updateCommande(Request $request, EntityManagerInterface $entityManager)
    {
        if ($this->getUser()) {
            $commandes = $entityManager->getRepository(Commandes::class)->findAll();

            $creneauDejaPris = false;

            foreach ($commandes as $commande) {
                if ($commande->getCreneau()->format('Y-m-d H:i:s') === $request->get('creneau')) {
                    $creneauDejaPris = true;
                    break;
                }
            }

            if (!$creneauDejaPris) {
                foreach ($commandes as $commande) {
                    if ($commande->getId() === intval($request->get('id'))) {
                        $commande->setCreneau(new \DateTimeImmutable($request->get('creneau')));
                        $entityManager->flush();
                        break;
                    }
                }
                return $this->redirectToRoute('pageMonCompte');
                //return new Response("'///MESSAGE :Modification effectuée !", Response::HTTP_CREATED);
            } else {
                return $this->redirectToRoute('pageMonCompte');
                //return new Response("'///MESSAGE :Le créneau à été déja pris entre temps ! ", Response::HTTP_CREATED);
            }
        } else {
            return $this->redirectToRoute('index');
        }
        return new Response("", Response::HTTP_CREATED);
    }


    #[Route('/deleteCommande', name: 'app_deleteCommande', methods: ['POST'])]
    public function deleteCommande(Request $request, EntityManagerInterface $entityManager)
    {
        if ($this->getUser()) {
            $commande = $entityManager->getRepository(Commandes::class)->find(intval($request->get('id')));

            if (!$commande) {
                throw $this->createNotFoundException('///MESSAGE :Commande not found');
            }
            $entityManager->remove($commande);
            $entityManager->flush();

            return $this->redirectToRoute('pageMonCompte');
        } else {
            return $this->redirectToRoute('index');
        }
        return new Response("", Response::HTTP_CREATED);
    }


    #[Route('/getCreneauDispo', name: 'app_getCreneauxDispo', methods: ['POST'])]
    public function getCreneauxDispo(EntityManagerInterface $entityManager)
    {
        $commandes = $entityManager->getRepository(Commandes::class)->findAll();
        $creneauxOccupes = [];

        // Ajouter les créneaux de chaque commande dans le tableau des créneaux occupés
        foreach ($commandes as $commande) {
            $creneau = $commande->getCreneau()->format('Y-m-d H:i:s');
            $creneauxOccupes[] = $creneau;
        }

        $heure = 8; // Heure du premier créneau
        $creneauxDisponibles = [];

        // Obtenir le fuseau horaire français
        $fuseauHoraire = new \DateTimeZone("Europe/Paris");

        // Parcourir les créneaux pour les 7 prochains jours
        for ($i = 1; $i <= 7; $i++) {
            $date = new \DateTime("now + {$i} day", $fuseauHoraire);
            $heure = 8; // Heure du premier créneau

            while ($heure <= 18) {
                $creneau = new \DateTime("{$date->format('Y-m-d')} {$heure}:00", $fuseauHoraire);

                if (!in_array($creneau->format('Y-m-d H:i:s'), $creneauxOccupes)) {
                    $creneauxDisponibles[] = $creneau->format('Y-m-d H:i:s');
                }
                $heure += 2;
            }
        }
        return new JsonResponse($creneauxDisponibles);
    }


    #[Route('/reprendreCommande', name: 'app_reprendreCommande', methods: ['POST'])]
    public function reprendreCommande(Request $request, EntityManagerInterface $entityManager)
    {
        if ($this->getUser()) {
            $commande = $entityManager->getRepository(Commandes::class)->find(intval($request->get('id')));

            $commande->setStatut("EN ATTENTE D'UN CRÉNEAU");
            $commande->setCreneau(Null);
            // $commande->setFormuleId(Null);
            $commande->setDateOuverturePaiement(Null);
            $entityManager->flush();
        }
        return $this->redirectToRoute('pageMonCompte');
    }


    #[Route('/rembourserCommande', name: 'app_rembourserCommande', methods: ['POST'])]
    public function rembourserCommande(Request $request, EntityManagerInterface $entityManager)
    {
        if ($this->getUser()) {
            $commande = $entityManager->getRepository(Commandes::class)->find(intval($request->get('id')));

            $commande->setStatut("ANNULÉ / REMBOURSEMENT");
            $commande->setCreneau(Null);
            $commande->setDateRemboursement(new DateTimeImmutable('now', new DateTimeZone('Europe/Paris')));
            $commande->setDateOuverturePaiement(Null);
            $entityManager->flush();
        }
        return $this->redirectToRoute('pageMonCompte');
    }
    */
}
