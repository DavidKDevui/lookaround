<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Clients;
use App\Entity\Commandes;
use App\Entity\Formules;
use App\Entity\Notes;
use App\Form\RegistrationFormType;
use App\Form\RegistrationFormType2;
use App\Security\ClientsAuthenticator;
use DateTimeImmutable;
use DateTimeZone;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use App\Generator\IdGenerator;


class IndexController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(Request $request, UserAuthenticatorInterface $userAuthenticator, ClientsAuthenticator $authenticator,  EntityManagerInterface $entityManager, AuthenticationUtils $authenticationUtils): Response
    {
            $user = new Clients();
            $form = $this->createForm(RegistrationFormType::class, $user);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $user->setRoles(['ROLE_USER']);
           
                $entityManager->persist($user);
                $entityManager->flush();

                $commande = new Commandes();
                $commande->setClientId($user);
                $commande->setPreferenceCreneau($form->get('preference_creneau')->getData());
                $commande->setPreferenceContact($form->get('preference_contact')->getData());
                $commande->setDateCommande(new DateTimeImmutable('now', new DateTimeZone('Europe/Paris')));
                $commande->setStatut("EN ATTENTE D'UN CRÉNEAU");

                $entityManager->persist($commande);
                $entityManager->flush();

                $userAuthenticator->authenticateUser(
                    $user,
                    $authenticator,
                    $request
                );

                $emailController = new EmailController();
                $emailController->demandePriseEnCompteMail($commande->getId(), $user->getEmail(), $form->get('preference_contact')->getData());

                if (strpos($user->getNumeroTelephone(), ' ') !== false) {
                    $emailController->forDavidNouvelleDemande($commande->getId());
                }

                $this->addFlash("success", "Votre demande a bien été prise en compte !");
                return $this->redirectToRoute('index');
            }

        $formulesTable = $entityManager->getRepository(Formules::class)->findAll();
        $notesTable = $entityManager->getRepository(Notes::class)->findAll();

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

            return $this->render('index.html.twig', [
                'registrationForm' => $form->createView(),
                'formulesTable' => $formulesTable,
                'notesTable' => $notesTable,
                'boolConnected' => $this->getUser(),
                'last_username' => $lastUsername,
                'error' => $error
            ]);
    }


    #[Route('/app_index_scroll', name: 'app_index_scroll')]
    public function app_index_scroll(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, ClientsAuthenticator $authenticator,  EntityManagerInterface $entityManager, AuthenticationUtils $authenticationUtils): Response
    {
        $this->addFlash("smoothScroll", "yes");
        return $this->redirectToRoute("index");
    }

    #[Route('/app_index_scroll_aide', name: 'app_index_scroll_aide')]
    public function app_index_scroll_aide(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, ClientsAuthenticator $authenticator,  EntityManagerInterface $entityManager, AuthenticationUtils $authenticationUtils): Response
    {
        $this->addFlash("smoothScroll2", "yes");
        return $this->redirectToRoute("index");
    }


    #[Route('/nos-réalisations', name: 'app_realisations')]
    public function realisations(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, ClientsAuthenticator $authenticator,  EntityManagerInterface $entityManager, AuthenticationUtils $authenticationUtils): Response
    {

        if (!$this->getUser()) {

            $error = $authenticationUtils->getLastAuthenticationError();
            $lastUsername = $authenticationUtils->getLastUsername();

            return $this->render('realisations.html.twig', [
                'last_username' => $lastUsername,
                'error' => $error
            ]);
        } else {

            return $this->render('realisations.html.twig');
        }
    }

    #[Route('/nos-tarifs', name: 'app_tarifs')]
    public function tarifs(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, ClientsAuthenticator $authenticator,  EntityManagerInterface $entityManager, AuthenticationUtils $authenticationUtils): Response
    {

        if (!$this->getUser()) {

            $error = $authenticationUtils->getLastAuthenticationError();
            $lastUsername = $authenticationUtils->getLastUsername();

            return $this->render('tarifs.html.twig', [
                'last_username' => $lastUsername,
                'error' => $error
            ]);
        } else {

            return $this->render('tarifs.html.twig');
        }
    }

    #[Route('/qui-sommes-nous', name: 'app_quisommesnous')]
    public function quisommesnous(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, ClientsAuthenticator $authenticator,  EntityManagerInterface $entityManager, AuthenticationUtils $authenticationUtils): Response
    {

        if (!$this->getUser()) {

            $error = $authenticationUtils->getLastAuthenticationError();
            $lastUsername = $authenticationUtils->getLastUsername();

            return $this->render('quisommesnous.html.twig', [
                'last_username' => $lastUsername,
                'error' => $error
            ]);
        } else {

            return $this->render('quisommesnous.html.twig');
        }
    }

    #[Route('/politique-confidentialité', name: 'app_politiqueconfidentialite')]
    public function app_politiqueconfidentialite(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, ClientsAuthenticator $authenticator,  EntityManagerInterface $entityManager, AuthenticationUtils $authenticationUtils): Response
    {
        if (!$this->getUser()) {

            $error = $authenticationUtils->getLastAuthenticationError();
            $lastUsername = $authenticationUtils->getLastUsername();

            return $this->render('politiqueconfidentialite.html.twig', [
                'last_username' => $lastUsername,
                'error' => $error
            ]);
        } else {

            return $this->render('politiqueconfidentialite.html.twig');
        }
    }


    #[Route('/conditions-generales', name: 'app_conditionsgenerales')]
    public function app_conditionsgenerales(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, ClientsAuthenticator $authenticator,  EntityManagerInterface $entityManager, AuthenticationUtils $authenticationUtils): Response
    {
        if (!$this->getUser()) {

            $error = $authenticationUtils->getLastAuthenticationError();
            $lastUsername = $authenticationUtils->getLastUsername();

            return $this->render('conditionsgenerales.html.twig', [
                'last_username' => $lastUsername,
                'error' => $error
            ]);
        } else {
            return $this->render('conditionsgenerales.html.twig');
        }
    }

    #[Route('/politique-cookies', name: 'app_politiquecookies')]
    public function app_politiquecookies(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, ClientsAuthenticator $authenticator,  EntityManagerInterface $entityManager, AuthenticationUtils $authenticationUtils): Response
    {
        if (!$this->getUser()) {

            $error = $authenticationUtils->getLastAuthenticationError();
            $lastUsername = $authenticationUtils->getLastUsername();

            return $this->render('politiquecookies.html.twig', [
                'last_username' => $lastUsername,
                'error' => $error
            ]);
        } else {

            return $this->render('politiquecookies.html.twig');
        }
    }


    #[Route('/test', name: 'test')]
    public function test(Request $request)
    {
        /* return $this->redirectToRoute('mot_de_passe_oublie');*/
    }
}
