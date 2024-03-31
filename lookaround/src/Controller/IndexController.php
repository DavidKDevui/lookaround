<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\DemandeFormType;
use App\Service\DatabaseService;
use App\Service\MailService;

class IndexController extends AbstractController
{

    #[Route('/', name: 'index')]
    public function index(Request $request, MailService $mailService): Response
    {
        $form = $this->createForm(DemandeFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();
            $mailService->mailToClientConfirmationDemande($data["email"]);
            $mailService->mailToMeNewDemande($data["email"], $data["description"]);

            $this->addFlash("success", "Votre demande a bien été prise en compte !");
            return $this->redirectToRoute('index');
        }

        return $this->render('index.html.twig', [
            'demandeForm' => $form->createView(),
            "lightBackgroundNav" => false, 
            "page" => "index"
        ]);
    }
    
    #[Route('/notre-histoire', name: 'notreHistoire')]
    public function notreHistoire(): Response
    {
        return $this->render('notreHistoire.html.twig', ["lightBackgroundNav" => true, "page" => "notreHistoire"]);
    }

    #[Route('/nos-réalisations', name: 'nosRealisations')]
    public function nosRealisations(DatabaseService $databaseService): Response
    {
        return $this->render('nosRealisations.html.twig', ["visites" => $databaseService->getListeVisites(), "lightBackgroundNav" => true, "page" => "nosRealisations"]);
    }

    #[Route('/nos-tarifs', name: 'nosTarifs')]
    public function nosTarifs(): Response
    {
        return $this->render('nosTarifs.html.twig', ["lightBackgroundNav" => true, "page" => "nosTarifs"]);
    }

    #[Route('/trouver-une-visite', name: 'trouverUneVisite')]
    public function trouverUneVisite(): Response
    {
        return $this->render('trouverUneVisite.html.twig', ["lightBackgroundNav" => true, "page" => "trouverUneVisite"]);
    }

    #[Route('/politique-confidentialité', name: 'politiqueConfidentialite')]
    public function politiqueConfidentialite(): Response
    {
        return $this->render('politiqueConfidentialite.html.twig', ["lightBackgroundNav" => true, "page" => "other"]);
    }

    #[Route('/conditions-generales', name: 'conditionsGenerales')]
    public function conditionsGenerales(): Response
    {
        return $this->render('conditionsGenerales.html.twig', ["lightBackgroundNav" => true, "page" => "other"]);
    }

    #[Route('/politique-cookies', name: 'politiqueCookies')]
    public function politiqueCookies(): Response
    {
        return $this->render('politiqueCookies.html.twig', ["lightBackgroundNav" => true, "page" => "other"]);
    }

    #[Route('/scrollToForm', name: 'scrollToForm')]
    public function scrollToForm(): Response
    {
        $this->addFlash("smoothScroll", "yes");
        return $this->redirectToRoute("index");
    }
}