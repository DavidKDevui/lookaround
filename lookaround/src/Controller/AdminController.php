<?php

namespace App\Controller;

use App\Entity\Clients;
use App\Entity\Commandes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManagerInterface;
use Spatie\Dropbox\Client;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use App\Entity\Formules;
use App\Entity\Notes;
use DateTimeImmutable;
use DateTimeZone;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class AdminController extends AbstractController
{

    #[Route('/dashBoardAdminForDavid', name: 'app_dashBoard', methods: ['GET'])]
    public function dashBoard(Request $request, EntityManagerInterface $entityManager)
    {
        $commandes = $entityManager->getRepository(Commandes::class)->findAll();
        $clients = $entityManager->getRepository(Clients::class)->findAll();
        $notes = $entityManager->getRepository(Notes::class)->findAll();
        return $this->render('dashboardadmin.html.twig', ["commandes" => $commandes, "clients" => $clients, "notes" => $notes]);
    }



    #[Route('/adminChoixCreneau', name: 'app_adminChoixCreneau', methods: ['POST'])]

    public function adminChoixCreneau(Request $request, EntityManagerInterface $entityManager)
    {
        $commande = $entityManager->getRepository(Commandes::class)->find(intval($request->get('id')));
        $client = $entityManager->getRepository(Clients::class)->find($commande->getClientId());

        if ($request->get('statut') == "EN ATTENTE D'UN CRÉNEAU") {
            $commande->setCreneau(new \DateTimeImmutable($request->get('creneau')));
            $commande->setFormuleId(intval($request->get('formule_id')));
            $commande->setAdresseRdv($request->get('adresse_rdv'));
            $commande->setPrix($request->get('prix'));

            $commande->setLocalisationCommande($request->get('localisation_commande'));
            $commande->setNbPhotosCommande($request->get('nb_photos_commande'));
            $commande->setAideIntegrationCommande($request->get('aide_integration_commande'));

            $commande->setStatut("EN COURS");
            $commande->setDateOuverturePaiement(new DateTimeImmutable('now', new DateTimeZone('Europe/Paris')));
            $entityManager->flush();

            $emailController = new EmailController();
            $emailController->rdvPrisEnCompteMail( $client->getEmail(), $commande->getId(), new \DateTimeImmutable($request->get('creneau')),  $commande->getAdresseRdv());
        }

        return $this->redirectToRoute('app_dashBoard');
    }



    #[Route('/adminModifierCommande', name: 'app_adminModifierCommande', methods: ['POST'])]

    public function adminModifierCommande(Request $request, EntityManagerInterface $entityManager)
    {
        $commande = $entityManager->getRepository(Commandes::class)->find(intval($request->get('id')));
        $client = $entityManager->getRepository(Clients::class)->find($commande->getClientId());

        if ($request->get('statut') == "EN COURS" || $request->get('statut') == "EN ATTENTE DU PAIEMENT") {
            $commande->setCreneau(new \DateTimeImmutable($request->get('creneau')));
            $commande->setAdresseRdv($request->get('adresse_rdv'));
            $commande->setPrix($request->get('prix'));
            $commande->setLocalisationCommande($request->get('localisation_commande'));
            $commande->setNbPhotosCommande($request->get('nb_photos_commande'));
            $commande->setAideIntegrationCommande($request->get('aide_integration_commande'));

            $entityManager->flush();

            $emailController = new EmailController();
            $emailController->commandeModifieMail($commande->getId(), $client->getEmail());
        }

        return $this->redirectToRoute('app_dashBoard');
    }



    #[Route('/adminRembourserCommande', name: 'app_adminSupprimerCommande', methods: ['POST'])]

    public function adminSupprimerCommande(Request $request, EntityManagerInterface $entityManager)
    {
        $commande = $entityManager->getRepository(Commandes::class)->find(intval($request->get('id')));

        $commande->setStatut("ANNULÉ - REMBOURSEMENT");
        $entityManager->flush();

        return $this->redirectToRoute('app_dashBoard');
    }



    #[Route('/adminPrestationRealise', name: 'app_adminPrestationRealise', methods: ['POST'])]

    public function adminPrestationRealise(Request $request, EntityManagerInterface $entityManager)
    {
        $commande = $entityManager->getRepository(Commandes::class)->find(intval($request->get('id')));
        $client = $entityManager->getRepository(Clients::class)->find($commande->getClientId());

        if ($request->get('statut') == "EN COURS") {
            $commande->setStatut("EN LIVRAISON");
            $entityManager->flush();

            $emailController = new EmailController();
            $emailController->prestationRealiseMail($commande->getId(), $client->getEmail());
        }
        return $this->redirectToRoute('app_dashBoard');
    }



    #[Route('/adminProduitLivre', name: 'app_adminProduitLivre', methods: ['POST'])]

    public function adminProduitLivre(Request $request, EntityManagerInterface $entityManager)
    {
        $commande = $entityManager->getRepository(Commandes::class)->find(intval($request->get('id')));
        $client = $entityManager->getRepository(Clients::class)->find($commande->getClientId());

        if ($request->get('statut') == "EN LIVRAISON") {
            $commande->setStatut("TERMINÉ");
            $commande->setDateLivraison(new DateTimeImmutable('now', new DateTimeZone('Europe/Paris')));
            $entityManager->flush();

            $emailController = new EmailController();
            $emailController->commandeLivreMail($commande->getId(), $client->getEmail());
        }
        return $this->redirectToRoute('app_dashBoard');
    }
}
