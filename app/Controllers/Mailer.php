<?php

namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;


class Mailer extends BaseController
{
    public function index($name_to,$email,$mail_subject,$mail_body)
    {
        if(isset($_POST["nom"]))
        $email = "ashura.house09@ashurahouse.com";

        $name = $name_to;
        $to = $email;
        $subject = $mail_subject;
        $body = $mail_body;

        $from = "ashura.house09@gmail.com";
        $password = "holcavvokyqbhhus";

        require_once "phpMail/src/PHPMailer.php";
        require_once "phpMail/src/SMTP.php";
        require_once "phpMail/src/Exception.php";

        $email = new PHPMailer();

        $email->IsSMTP();
        $email->Host = "smtp.gmail.com";
        $email->SMTPAuth = true;
        $email->Username = $from;
        $email->Password = $password;
        $email->Port = 587;
        $email->SMTPSecure = 'tls';
        $email->smtpConnect([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ]
        ]);

        $email->isHTML(true);
        $email->setFrom($from, $name);
        $email->addAddress($to);
        $email->Subject = $subject;
        $email->Body = $body;

        if ($email->send()) {
            header('Location: index.php?message=success');


        } else {
            echo "Error sending email" . $email->ErrorInfo;
        }



        if (isset($_POST['nom']) && isset($_POST['message']) && isset($_POST['email']) && isset($_POST['email'])) {
            $nom = trim($_POST['nom']);
            $message_body = trim($_POST['message']);
            $email = trim($_POST['email']);
            $subject = trim($_POST['subject']);
            send_email($nom, $email, $subject, $message_body . " Envoyer la reponse au : " . $email);




        }
    }
}
