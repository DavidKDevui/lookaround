<?php

namespace App\Controller;

use Exception;
use PHPMailer\PHPMailer\PHPMailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ResetPasswordController extends AbstractController
{
    /**
     * @Route("/reset-password", name="reset_password_request", methods={"GET", "POST"})
     */
    public function request(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');

            // TODO: Validate the email and handle the password reset request

            // Example code for sending the reset email using PHPMailer
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.hostinger.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'no-reply@lookaround.fr';
                $mail->Password = 'iventhesquernation754*YES';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                //Recipients
                $mail->setFrom('ro-reply@lookaround.fr', 'lookaround®');
                $mail->addAddress($email);

                //Content
                $mail->isHTML(true);
                $mail->Subject = 'Password Reset';
                $mail->Body    = $this->renderView('reset_password/email.html.twig', ['email' => $email]);

                $mail->send();

                // Redirect to a success page or display a flash message
                return $this->redirectToRoute('reset_password_success');
            } catch (Exception $e) {
                // Handle the exception or display an error message
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }

        return $this->render('reset_password/request.html.twig');
    }
}
