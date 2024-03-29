<?php

namespace App\Service;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Symfony\Component\HttpFoundation\Response;

class MailService
{
    private $mail;

    public function __construct(private $mailerMailSender, private $mailerMailReceiver, private $mailerUsername, private $mailerPassword, private $mailerHost, private $mailerPort){
        $this->mail = new PHPMailer(true); 
        $this->mail->isSMTP();
        $this->mail->Host = $mailerHost;
        $this->mail->SMTPAuth = true;
        $this->mail->Username = $mailerMailSender;
        $this->mail->Password = $mailerPassword;
        $this->mail->SMTPSecure = 'tls';
        $this->mail->Port = $mailerPort;
        $this->mail->setFrom($mailerMailSender, 'lookaround®');
        $this->mail->CharSet = 'UTF-8';
        $this->mail->isHTML(true);
    }

    public function mailToClientConfirmationDemande($email):string
    {
        try {
            $this->mail->clearAddresses();
            $this->mail->addAddress($email);
            $this->mail->Subject = "Votre demande a bien été prise en compte !";
            $this->mail->Body = $this->getBodyMail("Votre demande a bien été prise en compte !", "Nous avons bien reçu votre demande et nous sommes ravis de constater l\'intérêt que vous portez à nos services. Nous vous contacterons sous peu afin d'en savoir plus sur votre projet !");
            $this->mail->send();
            return "Mail envoyé";
        } 
        catch (Exception $e) {
            return 'Une erreur est survenue lors de l\'envoi de l\'e-mail : ' . $this->mail->ErrorInfo;
        }
    }
 
    public function mailToMeNewDemande($email, $description):string
    {
        try {
            $this->mail->clearAddresses();
            $this->mail->addAddress($this->mailerMailReceiver);
            $this->mail->Subject = "Nous avons une nouvelle demande";
            $this->mail->Body = $this->getBodyMail("Nous avons une nouvelle demande !", "Nous avons une nouvelle demande de " . $email . " : \n '" . $description . "'");
            $this->mail->send();
            return "Mail envoyé";
        } 
        catch (Exception $e) {
            return 'Une erreur est survenue lors de l\'envoi de l\'e-mail : ' . $this->mail->ErrorInfo;
        }
    }


    private function getBodyMail($subject, $text):string
    {
        return '<html><head></head><body>
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
        <br><h3 style="font-weight: 500; font-size: 18px; color: black; margin-bottom:15x;">' . $subject . ' </h3>
        <p style="font-size: 13.5px; font-weight: 300;  color: black; font-family: \'Google Sans\',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;">   ' . $text . '</p>
        <br><p style="font-size: 11px; color: black; font-family: \'Poppins\', sans-serif;padding-top: 20px;text-align: end; display:none">N° de la demande : ' . '</p></div></section></body></html>';
    }
}
