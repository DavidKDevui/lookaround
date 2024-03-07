<?php

namespace App\Controller;

use App\Entity\Clients;
use App\Entity\Commandes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Formules;
use App\Entity\Notes;
use DateTimeImmutable;
use DateTimeZone;
use Symfony\Component\Routing\Annotation\Route;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use App\Security\ClientsAuthenticator;



class ClientController extends AbstractController
{
    public function getPhotoForm(Request $request)
    {
        $id = $request->request->get('id');

        $client = HttpClient::create();
        $url = 'https://visite.lookaround.fr/' . $id;

        try {
            $response = $client->request('HEAD', $url);

            if ($response->getStatusCode() === 200) {
                $jsCode = sprintf('window.open(%s, "_blank");', json_encode($url));

                // Envoyer le code JavaScript au navigateur pour exécution
                echo '<script>' . $jsCode . '</script>';
            } else {
                echo 'URL is not accessible.';
            }
        } catch (TransportExceptionInterface $e) {
            echo 'Error: ' . $e->getMessage();
        }
        //return $this->redirectToRoute('linkAccess', ['id' => $id]);

        return new Response();
    }
/*

    public function index(EntityManagerInterface $entityManager,  AuthenticationUtils $authenticationUtils, RequestStack $requestStack)
    {
        if (!$this->getUser()) {

            $this->addFlash("connexionGo", "on");
            return $this->redirectToRoute('index');
        } else {

            $request = $requestStack->getCurrentRequest();

            $locale = $request->query->get('lang', 'fr');
            $request->setLocale($locale);

            $error = $authenticationUtils->getLastAuthenticationError();
            $lastUsername = $authenticationUtils->getLastUsername();

            $formules = $entityManager->getRepository(Formules::class)->findAll();
            return $this->render('moncompte.html.twig', [
                'formules' => $formules,
                'last_username' => $lastUsername,
                'error' => $error,
                "client" => $this->getUser(),
            ]);
        }
    }
*/

    #[Route('/paymentSuccess', name: 'app_paymentSuccess')]
    public function paymentSuccess(Request $request)
    {
        $response = $this->forward('App\Controller\ClientController::paiementAccepte', [], ['_method' => 'POST']);
        return $response;
    }


    #[Route('/paymentFailed', name: 'app_paymentFailed')]
    public function paymentFailed(Request $request)
    {
        $response = $this->forward('App\Controller\ClientController::paiementEchec', [], ['_method' => 'POST']);
        return $response;
    }

    /*
    #[Route('/heytoi', name: 'heytoi', methods: ['GET'])]
    public function heytoi(RouterInterface $router, ParameterBagInterface $params, Request $request, EntityManagerInterface $entityManager)
    {
        $commande = $entityManager->getRepository(Commandes::class)->find("37230707");

        echo $commande->getLocalisationCommande();
        echo $commande->getNbPhotosCommande();

        echo $commande->getPrix();
    }
*/

/*
    #[Route('/paiementAccepte', name: 'app_paiementAccepte', methods: ['POST'])]
    public function paiementAccepte(RouterInterface $router, ParameterBagInterface $params, Request $request, EntityManagerInterface $entityManager)
    {
        $session = $request->getSession();
        $id_commande = $session->get('id_commande');

        $commande = $entityManager->getRepository(Commandes::class)->find(intval($id_commande));

        if ($commande->getStatut() === "EN ATTENTE DU PAIEMENT") {
            $commande->setStatut('EN COURS');
            $commande->setIsAbonnementActive(1);
            $commande->setDatePaiement(new DateTimeImmutable('now', new DateTimeZone('Europe/Paris')));
            $entityManager->flush();

            $session->remove('id_commande');

            $this->addFlash("success", "Paiement effectué !");

            $emailController = new EmailController();
            $emailController->forDavidPaiementRecu($commande->getId());


            $this->addFlash("FactureMail", [
                "FM_id" => $commande->getId(),
                "FM_email" => $commande->getClientId()->getEmail(),

                "FM_creneau" => $commande->getCreneau(),
                "FM_date_commande" => $commande->getDateCommande(),

                "FM_nom_entreprise" => $commande->getClientId()->getNom(),
                "FM_id_client" => $commande->getClientId()->getId(),

                "FM_adresse_facturation" => $commande->getClientId()->getAdresseFacturation(),
                "FM_nomFormule" => $entityManager->getRepository(Formules::class)->find($commande->getFormuleId())->getNom(),

                "FM_localisation" => $commande->getLocalisationCommande(),
                "FM_nbphotos" => $commande->getNbPhotosCommande(),

                "FM_prix" => $commande->getPrix()
            ]);

            return $this->redirectToRoute('index');
        }
    }

    #[Route('/paiementEchec', name: 'app_paiementEchec', methods: ['POST'])]
    public function paiementEchec(Request $request)
    {
        if ($this->getUser()) {

            $session = $request->getSession();
            $session->remove('id_commande');

            $this->addFlash("failed", "Le paiement a échoué !");
            return $this->redirectToRoute('index');
        }
    }


    #[Route('/goToPaiement', name: 'app_goToPaiement', methods: ['POST'])]
    public function goToPaiement(EntityManagerInterface $entityManager, RouterInterface $router, Request $request)
    {
        if ($this->getUser()) {

            if ($request->get('adresse')) {

                $this->getUser()->setAdresseFacturation($request->get('adresse'));

                $entityManager->persist($this->getUser());
                $entityManager->flush();
            }

            $commande = $entityManager->getRepository(Commandes::class)->find(intval($request->get('id')));
            $formules = $entityManager->getRepository(Formules::class)->findAll();

            $session = $request->getSession();
            $session->set('id_commande', $request->get("id"));


            $stripeSecretKey = 'sk_test_51N2JwAElTDFLLN6Z8y9c677NvfzqV4NQag79X4p60mm5ZDP8pUF6IHb2G20KD5oN6BwKocDGtZ5dsEKO4ys8pajv00jKCwfETt';
            Stripe::setApiKey($stripeSecretKey);

            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'eur',
                            'unit_amount' => 100 * $commande->getPrix(),
                            'product_data' => [
                                'name' => $formules[$commande->getFormuleId()]->getNomCommercial(),
                            ],
                        ],
                        'quantity' => 1,
                    ],

                    [
                        'price' => 'price_1NT5kJElTDFLLN6ZwDzGGv0J',
                        'quantity' => 1,
                    ],
                ],

                'customer_email' => $this->getUser()->getEmail(),
                'mode' => 'subscription',
                'success_url' => $router->generate('app_paymentSuccess', [], RouterInterface::ABSOLUTE_URL),
                'cancel_url' => $router->generate('app_paymentFailed', [], RouterInterface::ABSOLUTE_URL)
            ]);
            return $this->redirect($session->url);
        }
        return new Response("");
    }


    #[Route('/goToAbonnement', name: 'app_goToAbonnement', methods: ['POST'])]
    public function goToAbonnement(EntityManagerInterface $entityManager, RouterInterface $router, Request $request)
    {
        if ($this->getUser()) {

            if ($request->get('adresse')) {

                $this->getUser()->setAdresseFacturation($request->get('adresse'));

                $entityManager->persist($this->getUser());
                $entityManager->flush();
            }

            $commande = $entityManager->getRepository(Commandes::class)->find(intval($request->get('id')));
            $formules = $entityManager->getRepository(Formules::class)->findAll();

            $session = $request->getSession();
            $session->set('id_commande', $request->get("id"));


            $stripeSecretKey = 'sk_test_51N2JwAElTDFLLN6Z8y9c677NvfzqV4NQag79X4p60mm5ZDP8pUF6IHb2G20KD5oN6BwKocDGtZ5dsEKO4ys8pajv00jKCwfETt';
            Stripe::setApiKey($stripeSecretKey);

            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [
                    [
                        'price' => 'price_1NT5kJElTDFLLN6ZwDzGGv0J',
                        'quantity' => 1,
                    ],
                ],

                'customer_email' => $this->getUser()->getEmail(),
                'mode' => 'subscription',
                'success_url' => $router->generate('app_paymentSuccess', [], RouterInterface::ABSOLUTE_URL),
                'cancel_url' => $router->generate('app_paymentFailed', [], RouterInterface::ABSOLUTE_URL)
            ]);
            return $this->redirect($session->url);
        }
        return new Response("");
    }
*/
/*
    #[Route('/getFacture', name: 'app_getFacture', methods: ['POST'])]
    public function getFacture(Request $request, EntityManagerInterface $entityManager)
    {
        if ($this->getUser()) {
            $commande = $entityManager->getRepository(Commandes::class)->find(intval($request->get('id')));
            $formules = $entityManager->getRepository(Formules::class)->findAll();

            return $this->render('invoice.html.twig', ["commande" => $commande, "client" => $this->getUser(), "formules" => $formules]);
        }
    }
*/

    #[Route('/getMailList', name: 'app_getMailList', methods: ['GET'])]
    public function getMailList(Request $request, EntityManagerInterface $entityManager)
    {
        return new Response( $entityManager->getRepository(Clients::class));

        $clients = $entityManager->getRepository(Clients::class)->findAll();
        $responseArray = [];

      

        foreach ($clients as $client) {
            $responseArray[] = $client->getEmail();
        }
        return new JsonResponse($responseArray);


    }


    #[Route('/isVisiteExiste', name: 'app_isVisiteExiste', methods: ['POST'])]
    public function isVisiteExiste(Request $request, EntityManagerInterface $entityManager)
    {
        $requestData = json_decode($request->getContent(), true);
        $id = $requestData['id'];

        $headers = @get_headers("https://visite.lookaround.fr/" . $id . "/");
        if ($headers && strpos($headers[0], '200') !== false) {
            return new JsonResponse(["Accesible" => true, "URL" => "https://visite.lookaround.fr/" . $id . "/"]);
        } else {
            return new JsonResponse(["Accesible" => false, "URL" => "https://visite.lookaround.fr/" . $id . "/"]);
        }
    }
/*
    #[Route('/isPhotosExiste', name: 'app_isPhotosExiste', methods: ['POST'])]
    public function isPhotosExiste(Request $request, EntityManagerInterface $entityManager)
    {
        $requestData = json_decode($request->getContent(), true);
        $id = $requestData['id'];

        $headers = @get_headers("https://fichiers.lookaround.fr/PHOTOS_" . $id . ".zip");
        if ($headers && strpos($headers[0], '200') !== false) {
            return new JsonResponse(["Accesible" => true, "URL" => "https://fichiers.lookaround.fr/PHOTOS_" . $id . ".zip"]);
        } else {
            return new JsonResponse(["Accesible" => false, "URL" => "https://fichiers.lookaround.fr/PHOTOS_" . $id . ".zip"]);
        }
    }
*/
/*
    #[Route('/setNote', name: 'app_setNote', methods: ['POST'])]
    public function setNote(Request $request, EntityManagerInterface $entityManager)
    {
        if ($this->getUser()) {

            $valueConsent = false;

            if ($request->get('checkbox-consent'))
                $valueConsent = true;
            else
                $valueConsent = false;


            $commande = $entityManager->getRepository(Commandes::class)->find(intval($request->get('id')));
            $client = $entityManager->getRepository(Clients::class)->find($commande->getClientId());

            if ($commande->getStatut() === "TERMINÉ") {

                $note = new Notes();
                $note->setCommentaire($request->get('commentaire'));
                $note->setNote(intval($request->get('note')));
                $note->setPrenom($request->get('prenom'));
                $note->setConsent($valueConsent);
                $commande->setNote($note);

                $entityManager->persist($commande);
                $entityManager->persist($note);
                $entityManager->flush();


                $emailController = new EmailController();
                $emailController->forDavidNoteRecue($commande->getId(), $client->getEmail());

                $this->addFlash("success", "Merci pour votre commentaire !");
            }

            return $this->redirectToRoute('index');
        }
    }
*/

/*
    #[Route('/rendezVousSoonMail', name: 'app_rendezVousSoonMail', methods: ['POST'])]
    public function rendezVousSoonMail(Request $request, EntityManagerInterface $entityManager)
    {
        if ($this->getUser()) {

            $commande = $entityManager->getRepository(Commandes::class)->find(intval($request->get('id')));
            $client = $entityManager->getRepository(Clients::class)->find($commande->getClientId());

            $emailController = new EmailController();
            $emailController->rendezvousBientotMail($commande->getId(), $client->getEmail(), $commande->getCreneau());


            return $this->redirectToRoute('app_dashBoard');
        } else {
            return $this->redirectToRoute('app_dashBoard');
        }
    }

    public function connexionClient(Request $request)
    {
        $data = $request->request->all();
        $email = $data["email"];
        $password = $data["password"];
    }
*/
/*
    #[Route('/mot-de-passe-oublie', name: 'mot_de_passe_oublie')]

    public function motDePasseOublie(Request $request, EntityManagerInterface $entityManager,  AuthenticationUtils $authenticationUtils, RequestStack $requestStack)
    {

        $request = $requestStack->getCurrentRequest();

        $locale = $request->query->get('lang', 'fr');
        $request->setLocale($locale);

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        $formules = $entityManager->getRepository(Formules::class)->findAll();
        return $this->render('clients/mot_de_passe_oublie.html.twig', [
            'formules' => $formules,
            'last_username' => $lastUsername,
            'error' => $error,
            "client" => $this->getUser(),
        ]);
    }
*/
    #[Route('/envoyer-email', name: 'envoyer_email', methods: ["POST"])]
    public function envoyerEmail(Request $request, EntityManagerInterface $entityManager)
    {
        $email = $request->get('email');
        $client = $entityManager->getRepository(Clients::class)->findOneBy(['email' => $email]);

        if ($client) {
            // Générez un token unique pour la réinitialisation du mot de passe
            $token = uniqid();

            // Enregistrez le token dans la base de données pour le client
            $client->setResetToken($token);
            //$entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($client);
            $entityManager->flush();

            // Envoie de l'e-mail de réinitialisation du mot de passe
            $mailer = new PHPMailer(true);
            // Configurez PHPMailer avec vos paramètres SMTP
            $mailer->isSMTP();
            $mailer->Host = 'smtp.hostinger.com';
            $mailer->SMTPAuth = true;
            $mailer->Username = 'no-reply@lookaround.fr';
            $mailer->Password = 'iventhesquernation754*YES';
            $mailer->SMTPSecure = 'tls';
            $mailer->Port = 587;
            $mailer->setFrom('no-reply@lookaround.fr', 'lookaround®');
            $mailer->CharSet = 'UTF-8';

            $mailer->addAddress($client->getEmail());
            $mailer->Subject = 'Réinitialisation du mot de passe';

            $mailer->isHTML(true);

            $mailer->Body = '
            <html>
            <head>
            </head>
            <body>
            <section style="width: 100%; height: 100%; background-color: #f7f7f7;">
            <div style="width: 70%; height: 100%; margin: 0 auto; padding: 10px 30px 18px 30px; background: white">
                <h1 class="logo-LA" style="font-size: 27px; font-size: 31px; font-family: \'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
                font-weight: 300;
                padding: 5px 5px;
                cursor: pointer;
                width: min-content;
                margin: 0 auto;
                color: #606060;
                display: flex;
                user-select: none;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;">look<span style="font-weight: 500; color: #219988;">around®</span></h1>
                <br><h3 style="font-weight: 500; font-size: 18px; color: black; margin-bottom:15x;">Réinitialisation du mot de passe</h3>

                <p style="font-size: 13.5px; font-weight: 300;  color: black; font-family: \'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;">
                Pour réinitialiser votre mot de passe, cliquez sur le lien suivant : </p>

                <a href="' . $request->getSchemeAndHttpHost() . $this->generateUrl('reinitialiser_mot_de_passe', ['token' => $token]) . '" style="cursor: pointer !important; margin-bottom:10px; color: #219988; font-family: \'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;">' . $request->getSchemeAndHttpHost() . $this->generateUrl('reinitialiser_mot_de_passe', ['token' => $token]) . '</a>
                
                <a style="cursor: pointer !important; margin-bottom:10px; color: transparent; font-family: \'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;">.</a>
                <br>
                    </div>
                </section>
            </body>
            </html>
            ';


            // Envoyer l'e-mail
            $mailer->send();

            // Redirigez l'utilisateur vers une page de confirmation
            return $this->redirectToRoute('lien_reinitialisation_envoye');
        } else {
            // Si l'e-mail n'existe pas dans la base de données, affichez un message d'erreur
            $this->addFlash('error', 'Adresse e-mail invalide.');
            return $this->redirectToRoute('mot_de_passe_oublie');
        }
    }

    #[Route("/reinitialiser-mot-de-passe/{token}", name: 'reinitialiser_mot_de_passe')]
    public function reinitialiserMotDePasse(Request $request, string $token, EntityManagerInterface $entityManager, UserPasswordHasherInterface  $passwordHasher, AuthenticationUtils $authenticationUtils, RequestStack $requestStack)
    {
        // Vérifiez si le token est valide
        $client = $entityManager->getRepository(Clients::class)->findOneBy(['resetToken' => $token]);

        if ($client) {
            if ($request->isMethod('POST')) {
                $nouveauMotDePasse = $request->request->get('nouveau_mot_de_passe');
                $confirmerMotDePasse = $request->request->get('confirmer_mot_de_passe');

                if (strlen($nouveauMotDePasse) >= 6) {
                    // Vérifier que les mots de passe correspondent
                    if ($nouveauMotDePasse === $confirmerMotDePasse) {
                        // Hasher le nouveau mot de passe
                        $hashedMotDePasse = $passwordHasher->hashPassword($client, $nouveauMotDePasse);

                        // Réinitialiser le mot de passe pour le client
                        $client->setPassword($hashedMotDePasse);
                        $client->setResetToken(null);
                        //$entityManager = $this->getDoctrine()->getManager();
                        $entityManager->persist($client);
                        $entityManager->flush();

                        // Rediriger l'utilisateur vers une page de succès
                        $this->addFlash('mdpReinit', '');
                        return $this->redirectToRoute('index');
                    } else {
                        // Les mots de passe ne correspondent pas, afficher un message d'erreur
                        $this->addFlash('error', 'Les mots de passe ne correspondent pas');
                    }
                } else {
                    $this->addFlash('error', 'Mot de passe trop court');
                }
            }

            $request = $requestStack->getCurrentRequest();

            $locale = $request->query->get('lang', 'fr');
            $request->setLocale($locale);

            $error = $authenticationUtils->getLastAuthenticationError();
            $lastUsername = $authenticationUtils->getLastUsername();

            $formules = $entityManager->getRepository(Formules::class)->findAll();
            return $this->render('clients/reinitialiser_mot_de_passe.html.twig', [
                'formules' => $formules,
                'last_username' => $lastUsername,
                'error' => $error,
                "client" => $this->getUser(),
                'token' => $token
            ]);
        } else {
            // Si le token est invalide, affichez un message d'erreur
            $this->addFlash('error', 'Token invalide.');
            return $this->redirectToRoute('mot_de_passe_oublie');
        }
    }

    #[Route("/mot-de-passe-reinitialise", name: 'mot_de_passe_reinitialise')]
    public function motDePasseReinitialise(Request $request, EntityManagerInterface $entityManager,  AuthenticationUtils $authenticationUtils, RequestStack $requestStack)
    {

        $request = $requestStack->getCurrentRequest();

        $locale = $request->query->get('lang', 'fr');
        $request->setLocale($locale);

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        $formules = $entityManager->getRepository(Formules::class)->findAll();
        return $this->render('clients/mot_de_passe_reinitialise.html.twig', [
            'formules' => $formules,
            'last_username' => $lastUsername,
            'error' => $error,
            "client" => $this->getUser(),
        ]);
    }

    #[Route("/lien-reinitialisation-envoye", name: 'lien_reinitialisation_envoye')]
    public function confirmationMotDePasse(Request $request, EntityManagerInterface $entityManager,  AuthenticationUtils $authenticationUtils, RequestStack $requestStack)
    {
        // Afficher la page de confirmation du mot de passe
        $request = $requestStack->getCurrentRequest();

        $locale = $request->query->get('lang', 'fr');
        $request->setLocale($locale);

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        $formules = $entityManager->getRepository(Formules::class)->findAll();
        return $this->render('clients/confirmation_mot_de_passe.html.twig', [
            'formules' => $formules,
            'last_username' => $lastUsername,
            'error' => $error,
            "client" => $this->getUser(),
        ]);
    }


    #[Route('/api/cleanDatabases', name: 'cleanDatabases')]
    public function cleanDatabases(Request $request, EntityManagerInterface $entityManager)
    {
        $countClients = 0;
        $countCommandes = 0;

        $clientsListe = $entityManager->getRepository(Clients::class)->findAll();
        $commandeListe = $entityManager->getRepository(Commandes::class)->findAll();
        $clientsRepository = $entityManager->getRepository(Clients::class);

            
        $arrayClients = array();

        foreach ($clientsListe as $client) {
            $arrayClients [] = $client->getId();
            if (strpos($client->getNumeroTelephone(), '@') !== false || !preg_match('/^0[0-9\s]+$/', $client->getNumeroTelephone()) ) {
                $entityManager->remove($client);
                $countClients++;
                
            } 
            
        }
       
        //$entityManager->flush();
        
        foreach ($commandeListe as $commande) {
            
            $idCommande = strval($commande->getClientId()->getId());
            
            if (!in_array($idCommande, $arrayClients)) {
                $entityManager->remove($commande);
                $countCommandes++;
            }
        }
        
        $entityManager->flush();
        
        return new Response("Suppression de " . $countClients . " clients et de " . $countCommandes ." commandes !");
        
        //return $this->redirectToRoute('index');
    }
}
