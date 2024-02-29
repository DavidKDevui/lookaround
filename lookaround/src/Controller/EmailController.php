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
use Symfony\Component\Validator\Constraints\Uuid;
use phpseclib3\Net\SSH2;
use App\Service\SSHClient;
use App\Service\FTPClient;

class EmailController extends AbstractController
{

    //Mails envoyés à l'utilisateur---------------------------------------------------------------------------------------------------------
    public function demandePriseEnCompteMail($idcommande, $email, $preference_contact)
    {
        $mail = new PHPMailer(true); 

        try {
            // Configuration du serveur SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'no-reply@lookaround.fr';
            $mail->Password = 'iventhesquernation754*YES';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
                
            // Configuration de l'e-mail
            $mail->setFrom('no-reply@lookaround.fr', 'lookaround®');
            $mail->addAddress($email);
            $mail->Subject = 'Votre demande a bien été prise en compte !';
            $mail->CharSet = 'UTF-8';

            $mail->isHTML(true);

            $mail->Body = '
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

                <br><h3 style="font-weight: 500; font-size: 18px; color: black; margin-bottom:15x;">Votre demande a bien été prise en compte !</h3>

                <p style="font-size: 13.5px; font-weight: 300;  color: black; font-family: \'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;">Nous avons bien reçu votre demande et nous sommes ravis de constater l\'intérêt que vous portez à nos services. Nous vous contacterons sous peu par ' . $preference_contact . ' afin de convenir ensemble d\'un créneau de rendez-vous.</p>
                <br>

                    <p style="font-size: 11px; color: black; font-family: \'Poppins\', sans-serif;
                    padding-top: 20px;
                    text-align: end;">N° de la demande : ' . $idcommande . '</p>

                    </div>
                </section>
            </body>
            </html>
            ';
            $mail->send();
            return new Response();
        } catch (Exception $e) {
            echo 'Une erreur est survenue lors de l\'envoi de l\'e-mail : ' . $mail->ErrorInfo;
        }
    }


    #[Route('/rdvPrisEnCompteMail', name: 'app_rdvPrisEnCompteMail', methods: ['POST'])]
    public function rdvPrisEnCompteMail($email, $idcommande, $creneau, $date_rdv)
    {

        $joursSemaine = [
            'Monday' => 'Lundi',
            'Tuesday' => 'Mardi',
            'Wednesday' => 'Mercredi',
            'Thursday' => 'Jeudi',
            'Friday' => 'Vendredi',
            'Saturday' => 'Samedi',
            'Sunday' => 'Dimanche'
        ];

        $moisAnnee = [
            'January' => 'Janvier',
            'February' => 'Février',
            'March' => 'Mars',
            'April' => 'Avril',
            'May' => 'Mai',
            'June' => 'Juin',
            'July' => 'Juillet',
            'August' => 'Août',
            'September' => 'Septembre',
            'October' => 'Octobre',
            'November' => 'Novembre',
            'December' => 'Décembre'
        ];


        $mail = new PHPMailer(true); // Pass true to enable exceptions

        try {
            // Configuration du serveur SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'no-reply@lookaround.fr';
            $mail->Password = 'iventhesquernation754*YES';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Configuration de l'e-mail
            $mail->setFrom('no-reply@lookaround.fr', 'lookaround®');
            $mail->addAddress($email);
            $mail->Subject = 'Rendez-vous confirmé !';
            $mail->CharSet = 'UTF-8';

            $mail->isHTML(true);

            $mail->Body = '
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

                <br><h3 style="font-weight: 500; font-size: 18px; color: black; margin-bottom:15x;">Rendez-vous confirmé !</h3>

                <p style="font-size: 13.5px; font-weight: 300;  color: black; font-family: \'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;">Notre rendez-vous du ' . $joursSemaine[$creneau->format('l')] . " " . $creneau->format('d') .   " " . $moisAnnee[$creneau->format('F')]    . " " . $creneau->format('\à H\hi') .  ', au "'. $date_rdv . '" a bien été confirmé !</p>
                <br>
                <br>
        
                    <p style="font-size: 11px; color: black;  font-family: \'Poppins\', sans-serif; 
                    padding-top: 20px;
                    text-align: end;">N° de commande : ' . $idcommande . '</p>

                    </div>
                </section>
            </body>
            </html>';
            /*
            $pdfData = $request->request->get('pdfData');
            $pdfBinary = base64_decode($pdfData);
            $filename = uniqid() . '.pdf';
            $tempPath = $this->getParameter('kernel.project_dir') . '/var/temp/';
            $pdfPath = $tempPath . $filename;
            $result = file_put_contents($pdfPath, $pdfBinary);
            if ($result === false) {
                echo 'efzf';
            }
            $mail->addAttachment($pdfPath, 'Facture N°' . $idcommande . ".pdf");
            */
            $mail->send();
            return new Response();
        } catch (Exception $e) {
            echo 'Une erreur est survenue lors de l\'envoi de l\'e-mail : ' . $mail->ErrorInfo;
        }
    }

    #[Route('/demandeDeNoteeMail', name: 'app_demandeDeNoteeMail', methods: ['POST'])]
    public function demandeDeNoteeMail(Request $request)
    {
        $email = $request->request->get('email');
        $idcommande = $request->request->get('idCommande');

        $mail = new PHPMailer(true); // Pass true to enable exceptions

        try {
            // Configuration du serveur SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'no-reply@lookaround.fr';
            $mail->Password = 'iventhesquernation754*YES';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Configuration de l'e-mail
            $mail->setFrom('no-reply@lookaround.fr', 'lookaround®');
            $mail->addAddress($email);
            $mail->Subject = 'Votre avis nous intéresse !';
            $mail->CharSet = 'UTF-8';

            $mail->isHTML(true);

            $mail->Body = '
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

                <br><h3 style="font-weight: 500; font-size: 18px; color: black; margin-bottom:15x;">Votre avis nous intéresse !</h3>

                <p style="font-size: 13.5px; font-weight: 300;  color: black; font-family: \'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;">Votre expérience compte beaucoup pour nous, c\'est pourquoi nous vous invitons à partager votre opinion sur le service que vous avez reçu. Votre retour nous permettra de mieux comprendre vos besoins et de nous assurer que nous vous offrons le meilleur service possible.</p>
                <br>
                <br>
                <a href="https://lookaround.fr/mes-commandes" style="z-index: 1; cursor: pointer !important;
        
                    font-size: 13px;
                    background-color: #219988;
                    border: 0px solid;
                    border-top-color: currentcolor;
                    border-right-color: currentcolor;
                    border-bottom-color: currentcolor;
                    border-bottom-style: solid;
                    border-bottom-width: 0px;
                    border-left-color: currentcolor;
                    color: rgb(255, 255, 255);
                    border-radius: 3px;
                    padding: 3px 15px;
                    font-weight: 400;
                    text-align: end;
                    text-decoration: none;
                    box-shadow: 0 2px 1px 0 #ccc;
                    border-bottom: 2px solid;
                    font-family: \'Poppins\', sans-serif;
                    border-bottom-color: currentcolor;
                    font-family: \'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
                    border-color: #032420;">Laisser un commentairee</a>

                    <p style="font-size: 11px; color: black;  font-family: \'Poppins\', sans-serif; 
                    padding-top: 20px;
                    text-align: end;">N° de commande : ' . $idcommande . '</p>

                    </div>
                </section>
            </body>
            </html>
            ';

            $mail->send();
            return $this->redirectToRoute("app_dashBoard");
        } catch (Exception $e) {
            echo 'Une erreur est survenue lors de l\'envoi de l\'e-mail : ' . $mail->ErrorInfo;
        }
    }


    public function prestationRealiseMail($idcommande, $email)
    {
        $mail = new PHPMailer(true); // Pass true to enable exceptions

        try {
            // Configuration du serveur SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'no-reply@lookaround.fr';
            $mail->Password = 'iventhesquernation754*YES';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Configuration de l'e-mail
            $mail->setFrom('no-reply@lookaround.fr', 'lookaround®');
            $mail->addAddress($email);
            $mail->Subject = 'Votre commande vous sera livrée sous 48h !';
            $mail->CharSet = 'UTF-8';

            $mail->isHTML(true);

            $mail->Body = '
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
                <br><h3 style="font-weight: 500; font-size: 18px; color: black; margin-bottom:15x;">Votre commande vous sera livrée sous 48h !</h3>

                <p style="font-size: 13.5px; font-weight: 300;  color: black; font-family: \'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;">Les prises de vues ont été réalisées avec succès. Nous allons dès à présent nous y atteler afin de vous livrer un rendu de haute qualité !</p>
                
 
                <br>
            
                    <p style="font-size: 11px; color: black;  font-family: \'Poppins\', sans-serif; padding-top: 20px;
                    text-align: end;">N° de commande : ' . $idcommande . '</p>

                    </div>
                </section>
            </body>
            </html>
            ';
            $mail->send();
            return new Response();
        } catch (Exception $e) {
            echo 'Une erreur est survenue lors de l\'envoi de l\'e-mail : ' . $mail->ErrorInfo;
        }
    }


    public function commandeModifieMail($idcommande, $email)
    {
        $mail = new PHPMailer(true); // Pass true to enable exceptions

        try {
            // Configuration du serveur SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'no-reply@lookaround.fr';
            $mail->Password = 'iventhesquernation754*YES';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Configuration de l'e-mail
            $mail->setFrom('no-reply@lookaround.fr', 'lookaround®');
            $mail->addAddress($email);
            $mail->Subject = 'Votre commande a été modifiée !';
            $mail->CharSet = 'UTF-8';

            $mail->isHTML(true);

            $mail->Body = '
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
                <br><h3 style="font-weight: 500; font-size: 18px; color: black; margin-bottom:15x;">Votre commande a été modifiée !</h3>

                <p style="font-size: 13.5px; font-weight: 300;  color: black; font-family: \'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;">Les informations de votre commande ont bien été mises à jour.</p>
                
 
                <br>
            
                    <p style="font-size: 11px; color: black;  font-family: \'Poppins\', sans-serif; padding-top: 20px;
                    text-align: end;">N° de commande : ' . $idcommande . '</p>

                    </div>

                </section>
            </body>
            </html>
            ';
            $mail->send();
            return new Response();
        } catch (Exception $e) {
            echo 'Une erreur est survenue lors de l\'envoi de l\'e-mail : ' . $mail->ErrorInfo;
        }
    }

 

    public function commandeLivreMail($idcommande, $email)
    {
        $mail = new PHPMailer(true); // Pass true to enable exceptions

        try {
            // Configuration du serveur SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'no-reply@lookaround.fr';
            $mail->Password = 'iventhesquernation754*YES';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Configuration de l'e-mail
            $mail->setFrom('no-reply@lookaround.fr', 'lookaround®');
            $mail->addAddress($email);
            $mail->Subject = 'Votre visite est maintenant disponible !';
            $mail->CharSet = 'UTF-8';

            $mail->isHTML(true);

            $mail->Body = '
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
                <br><h3 style="font-weight: 500; font-size: 18px; color: black; margin-bottom:15x;">Votre visite est maintenant disponible !</h3>

                <p style="font-size: 13.5px; font-weight: 300;  color: black; font-family: \'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;">
                Votre visite est maintenant disponible ! Vous pouvez y accéder via l\'adresse suivante : </p>

                <a href="https://visite.lookaround.fr/' . $idcommande . '" style="cursor: pointer !important; margin-bottom:10px; color: #219988; font-family: \'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;">https://visite.lookaround.fr/' . $idcommande . '</a>, <p style="font-size: 13.5px; font-weight: 300;  color: black; font-family: \'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;">
                    Vous pouvez également télécharger les fichiers de la visite via l\'adresse suivante : </p> <a href="https://fichiers.lookaround.fr/' . $idcommande . '.zip" style="cursor: pointer !important; margin-bottom:10px; color: #219988; font-family: \'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;">https://fichiers.lookaround.fr/' . $idcommande . '.zip</a>.
                
                <a style="cursor: pointer !important; margin-bottom:10px; color: transparent; font-family: \'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;">.</a>
                <br>
              
                    <p style="font-size: 11px; color: black;  font-family: \'Poppins\', sans-serif; padding-top: 20px;
                    text-align: end;">N° de commande : ' . $idcommande . '</p>

                    </div>
                </section>
            </body>
            </html>
            ';
            $mail->send();
            return new Response();
        } catch (Exception $e) {
            echo 'Une erreur est survenue lors de l\'envoi de l\'e-mail : ' . $mail->ErrorInfo;
        }
    }


    public function rendezvousBientotMail($idcommande, $email, $creneau)
    {
        $mail = new PHPMailer(true); // Pass true to enable exceptions

        $joursSemaine = [
            'Monday' => 'Lundi',
            'Tuesday' => 'Mardi',
            'Wednesday' => 'Mercredi',
            'Thursday' => 'Jeudi',
            'Friday' => 'Vendredi',
            'Saturday' => 'Samedi',
            'Sunday' => 'Dimanche'
        ];

        $moisAnnee = [
            'January' => 'Janvier',
            'February' => 'Février',
            'March' => 'Mars',
            'April' => 'Avril',
            'May' => 'Mai',
            'June' => 'Juin',
            'July' => 'Juillet',
            'August' => 'Août',
            'September' => 'Septembre',
            'October' => 'Octobre',
            'November' => 'Novembre',
            'December' => 'Décembre'
        ];


        try {
            // Configuration du serveur SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'no-reply@lookaround.fr';
            $mail->Password = 'iventhesquernation754*YES';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Configuration de l'e-mail
            $mail->setFrom('no-reply@lookaround.fr', 'lookaround®');
            $mail->addAddress($email);
            $mail->Subject = 'Notre rendez-vous approche à grands pas !';
            $mail->CharSet = 'UTF-8';

            $mail->isHTML(true);

            $mail->Body = '
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
                <br><h3 style="font-weight: 500; font-size: 18px; color: black; margin-bottom:15x;">Notre rendez-vous approche à grands pas !</h3>

                <p style="font-size: 13.5px; font-weight: 300;  color: black; font-family: \'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;">
                Il ne reste plus que quelques heures avant notre rendez-vous du ' . $joursSemaine[$creneau->format('l')] . " " . $creneau->format('d') .   " " . $moisAnnee[$creneau->format('F')]    . " " . $creneau->format('\à H\hi') .  '. Notre équipe se prépare à la réalisation de votre visite !</p>

                <br>
                    <p style="font-size: 11px; color: black;  font-family: \'Poppins\', sans-serif; padding-top: 20px;
                    text-align: end;">N° de commande : ' . $idcommande . '</p>

                    </div>
                </section>
            </body>
            </html>
            ';
            $mail->send();
            return new Response();
        } catch (Exception $e) {
            echo 'Une erreur est survenue lors de l\'envoi de l\'e-mail : ' . $mail->ErrorInfo;
        }
    }



    public function forDavidNouvelleDemande($idcommande)
    {
        $mail = new PHPMailer(true); // Pass true to enable exceptions

        try {
            // Configuration du serveur SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'no-reply@lookaround.fr';
            $mail->Password = 'iventhesquernation754*YES';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Configuration de l'e-mail
            $mail->setFrom('no-reply@lookaround.fr', 'lookaroundPro®');
            $mail->addAddress("ddkonate54@gmail.com");
            $mail->Subject = 'Nous avons une nouvelle demande';
            $mail->CharSet = 'UTF-8';

            $mail->isHTML(true);

            $mail->Body = '
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
                -ms-user-select: none;">look<span style="font-weight: 500; color: #219988;">aroundPro®</span></h1>

                <p style="font-size: 13.5px; font-weight: 300;  color: black; font-family: \'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;">Nous avons une nouvelle demande</p>

 
                <p style="font-size: 18px;
                 color: black;
                 font-weight: 500;
                 text-align: center;
                 padding: 20px;
                 width: fit-content;
                 margin: 0 auto;
                 background: #fdfdfd;">ID : ' . $idcommande . '</p>

                <br>
                <a href="https://lookaround.fr/dashBord" style="z-index: 1; cursor: pointer !important;
        
                    font-size: 13px;
                    background-color: #219988;
                    border: 0px solid;
                    border-top-color: currentcolor;
                    border-right-color: currentcolor;
                    border-bottom-color: currentcolor;
                    border-bottom-style: solid;
                    border-bottom-width: 0px;
                    border-left-color: currentcolor;
                    color: rgb(255, 255, 255);
                    border-radius: 3px;
                    padding: 3px 15px;
                    font-weight: 400;
                    text-align: end;
                    text-decoration: none;
                    box-shadow: 0 2px 1px 0 #ccc;
                    border-bottom: 2px solid;
                    font-family: \'Poppins\', sans-serif;
                    border-bottom-color: currentcolor;
                    font-family: \'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
                    border-color: #032420;">Voir la demande</a>

                    </div>
                </section>
            </body>
            </html>
            ';
            $mail->send();
            return new Response();
        } catch (Exception $e) {
            echo 'Une erreur est survenue lors de l\'envoi de l\'e-mail : ' . $mail->ErrorInfo;
        }
    }

    public function forDavidPaiementRecu($idcommande)
    {
        $mail = new PHPMailer(true); // Pass true to enable exceptions

        try {
            // Configuration du serveur SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'no-reply@lookaround.fr';
            $mail->Password = 'iventhesquernation754*YES';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Configuration de l'e-mail
            $mail->setFrom('no-reply@lookaround.fr', 'lookaroundPro®');
            $mail->addAddress("ddkonate54@gmail.com");
            $mail->Subject = 'Nous avons reçu un paiement';
            $mail->CharSet = 'UTF-8';

            $mail->isHTML(true);

            $mail->Body = '
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
                -ms-user-select: none;">look<span style="font-weight: 500; color: #219988;">aroundPro®</span></h1>

                <p style="font-size: 13.5px; font-weight: 300;  color: black; font-family: \'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;">Nous avons reçu un paiement</p>


                <p style="font-size: 18px;
                color: black;
                font-weight: 500;
                text-align: center;
                padding: 20px;
                width: fit-content;
                margin: 0 auto;
                background: #fdfdfd;">ID : ' . $idcommande . '</p>

            
                <br>
                <a href="https://lookaround.fr/dashBord" style="z-index: 1; cursor: pointer !important;
        
                    font-size: 13px;
                background-color: #219988;
                    border: 0px solid;
                    border-top-color: currentcolor;
                    border-right-color: currentcolor;
                    border-bottom-color: currentcolor;
                    border-bottom-style: solid;
                    border-bottom-width: 0px;
                    border-left-color: currentcolor;
                    color: rgb(255, 255, 255);
                    border-radius: 3px;
                    padding: 3px 15px;
                    font-weight: 400;
                    text-align: end;
                    text-decoration: none;
                    box-shadow: 0 2px 1px 0 #ccc;
                    border-bottom: 2px solid;
                    font-family: \'Poppins\', sans-serif;
                    border-bottom-color: currentcolor;
                    font-family: \'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
                    border-color: #032420;">Voir la commande</a>

                    </div>
                </section>
            </body>
            </html>
            ';
            $mail->send();
            return new Response();
        } catch (Exception $e) {
            echo 'Une erreur est survenue lors de l\'envoi de l\'e-mail : ' . $mail->ErrorInfo;
        }
    }

    public function forDavidNoteRecue($idcommande)
    {
        $mail = new PHPMailer(true); // Pass true to enable exceptions

        try {
            // Configuration du serveur SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'no-reply@lookaround.fr';
            $mail->Password = 'iventhesquernation754*YES';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Configuration de l'e-mail
            $mail->setFrom('no-reply@lookaround.fr', 'lookaroundPro®');
            $mail->addAddress("ddkonate54@gmail.com");
            $mail->Subject = 'Nous avons reçu une note';
            $mail->CharSet = 'UTF-8';

            $mail->isHTML(true);

            $mail->Body = '
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
                -ms-user-select: none;">look<span style="font-weight: 500; color: #219988;">aroundPro®</span></h1>

                <p style="font-size: 13.5px; font-weight: 300;  color: black; font-family: \'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;">Nous avons reçu une note</p>


                <p style="font-size: 18px;
                color: black;
                font-weight: 500;
                text-align: center;
                padding: 20px;
                width: fit-content;
                margin: 0 auto;
                background: #fdfdfd;">ID : ' . $idcommande . '</p>

            
                <br>
                <a href="https://lookaround.fr/dashBord" style="z-index: 1; cursor: pointer !important;
        
                    font-size: 13px;
                background-color: #219988;
                    border: 0px solid;
                    border-top-color: currentcolor;
                    border-right-color: currentcolor;
                    border-bottom-color: currentcolor;
                    border-bottom-style: solid;
                    border-bottom-width: 0px;
                    border-left-color: currentcolor;
                    color: rgb(255, 255, 255);
                    border-radius: 3px;
                    padding: 3px 15px;
                    font-weight: 400;
                    text-align: end;
                    text-decoration: none;
                    box-shadow: 0 2px 1px 0 #ccc;
                    border-bottom: 2px solid;
                    font-family: \'Poppins\', sans-serif;
                    border-bottom-color: currentcolor;
                    font-family: \'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
                    border-color: #032420;">Voir la commande</a>

                    </div>
                </section>
            </body>
            </html>
            ';
            $mail->send();
            return new Response();
        } catch (Exception $e) {
            echo 'Une erreur est survenue lors de l\'envoi de l\'e-mail : ' . $mail->ErrorInfo;
        }
    }
}
