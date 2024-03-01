<?php


namespace App\Controller;

use App\Entity\Commandes;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManagerInterface;
use Spatie\Dropbox\RefreshableTokenProvider;
use Spatie\Dropbox\Client;
use Spatie\Dropbox\Token\RefreshToken;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

use Spatie\Dropbox\Exceptions\BadRequest;
use Spatie\Dropbox\Exceptions\UnauthorizedException;
use Spatie\Dropbox\Exceptions\TooManyRequestsException;
use Spatie\Dropbox\Exceptions\UnknownErrorException;
use Spatie\Dropbox\Exceptions\UnhandledException;

use Spatie\Dropbox\TokenProvider;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class DropboxController  extends AbstractController
{

    private $tokenProvider;
    private $client;

    public function __construct()
    {
        /*
        $this->client = new Client(
            'sl.BdUwELe9qIFddXyUBiN5Z-Jw7spUNoEB4xn9foB_f8M4uexvJaudBc0YPmEYagJe3jTGKCnp7raC8N2y0DQBE1R9uTdrBSw8MYtnSrpcZF6izNAcu6g-ti0Bidwvqn-cq1cq1f-eBjY'
        );
        */

        $appKey = 'plevwof2ddcpygc';
        $appSecret = 'er4a9dzmotdto09';

        $this->client = new Client("sl.BdzOjoPbsji9ZE9F7jysQ4MV-T2rv0qV-TjFLu_YzCLz0toktBcB5nTeh-AgT_DMnyUKH3ppzJl0g8j7cCkjJ2r4l-5csl5aVlzAm_MC2YVEOVIhzFyckCCAiBHYrlyCH9AjavHWYDY");
    }

    public function showPageVuesId($id, EntityManagerInterface $entityManager, Request $request,  AuthenticationUtils $authenticationUtils)
    {
        $exists = $this->isFolderExists($id);


        if ($exists) {
            $fileList = $this->listPhotos($id);

            if ($this->getUser()) {

                $error = $authenticationUtils->getLastAuthenticationError();
                $lastUsername = $authenticationUtils->getLastUsername();

                return $this->render('trouvervisite.html.twig', [
                    'photos' => $this->findLinksPhotos($id, $fileList),
                    'jsonSample' => $this->findLinkSample($id),
                    'last_username' => $lastUsername,
                    'error' => $error
                ]);
            }
            
        } else {

            $commande = $entityManager->getRepository(Commandes::class)->find(intval($request->get('id')));

            if ($commande) {
                if ($commande->getStatut() == "EN LIVRAISON" && $commande->getClientId() == $this->getUser()) {

                    return $this->render('trouvervisite.html.twig', [
                        'info' => "Votre commande est en cours de livraison !"
                    ]);
                } else if ($commande->getStatut() == "EN COURS" && $commande->getClientId() == $this->getUser()) {
                    return $this->render('trouvervisite.html.twig', [
                        'info' => "Votre commande a été confirmée. Vous trouverez les détais du rendez-vous par email !"
                    ]);
                } else {
                    return $this->render('trouvervisite.html.twig', [
                        'info' => "Aucune vue n'est associée à ce numéro"
                    ]);
                }
            } else {
                return $this->render('trouvervisite.html.twig', [
                    'info' => "Aucune vue n'est associée à ce numéro"
                ]);
            }
        }
    }


    public function showPageVues(AuthorizationCheckerInterface $authChecker, TokenStorageInterface $tokenStorage,  AuthenticationUtils $authenticationUtils)
    {
        if (!$this->getUser()) {

            $error = $authenticationUtils->getLastAuthenticationError();
            $lastUsername = $authenticationUtils->getLastUsername();

            return $this->render('trouvervisite.html.twig', [
                'last_username' => $lastUsername,
                'error' => $error
            ]);
        } else
            return $this->render('trouvervisite.html.twig');
    }



    public function isFolderExists($id_commande)
    {
        $response = $this->client->listFolder("/");

        $folders = array();
        foreach ($response['entries'] as $entry) {
            if ($entry['.tag'] == 'folder') {
                $folders[] = $entry['name'];
            }
        }
        return (in_array($id_commande, $folders));
    }


    public function listPhotos($reference)
    {
        $path = '/' . $reference;

        $response = $this->client->listFolder($path);

        $files = array();
        foreach ($response['entries'] as $entry) {
            if (($entry['.tag'] == 'file') &&  (substr($entry['name'], 0, strlen($reference)) == $reference) && substr($entry['name'], -4) == ".jpg" || substr($entry['name'], -5) == ".jpeg") {
                $files[] = $entry['name'];
            }
        }
        return $files;
    }


    public function findLinksPhotos($reference, $listPhotos)
    {
        $files = array();
        foreach ($listPhotos as $photo) {
            $filePath = $reference . "/" . $photo; // Replace with the actual file path in your Dropbox account
            $namePiece = str_replace($reference . "_", "", $photo);
            $namePiece = ucfirst(str_replace(['.jpg', '.jpeg'], '', $namePiece));
            $files[$namePiece] = $this->client->getTemporaryLink($filePath);
        }
        return $files;
    }

    public function findLinkSample($reference)
    {
        $filePath = $reference . "/sample.json"; // Replace with the actual file path in your Dropbox account
        $link = $this->client->getTemporaryLink($filePath);

        return file_get_contents($link);
    }
}
