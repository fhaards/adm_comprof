<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader

require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';

//Create an instance; passing `true` enables exceptions

$mail = new PHPMailer(true);
$name = $_POST['name'];
$subject = $_POST['subject'];
$email_user = $_POST['email'];
$message = $_POST['message'];
try {
    $email_company = "m.fahmi37@gmail.com";
    $name_company = "PT Adidaya Duta Mitrakom";
    $email_to_admin =   "<html>
                    <head>
                    </head>
                    <body>
                        [Please copy this templates] <br>
                        Hi , <strong> " . $name . " </strong> <br>
                        <br>
                        Thanks for getting in touch with us, <br>
                        we really appreciate it since we're always looking for ways <br>
                        to make our company even better <br>
                        Messages : <br> " . $message . " <br>
                        <br><br><hr><br><br>
                    </body>
                    </html>";

    $mail->IsSMTP(true);
    $mail->SMTPAuth   = true;
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = "ssl";
    $mail->Port = "465";

    //USERNAME PASSWORD
    $mail->Username = "m.fahmi37@gmail.com";
    $mail->Password = "google37";

    ///SET RECEPIENTS
    $mail->SetFrom("m.fahmi37@gmail.com","Muhammad Fahmi");
    $mail->AddAddress($email_company, $name_company);
    $mail->AddReplyTo($email_user, $name);
    $mail->Subject = '[ Do not reply ] - ' . $subject;
    $mail->MsgHTML($email_to_admin);

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

// if ($mail->Send()) {
//     echo 'Your message has been sent. Thank you! <script>setTimeout(function(){window.location.reload();},3000);</script>';
// } else {
//    echo 'Form submission failed and no error message <script>setTimeout(function(){window.location.reload();},3000);</script>';
// }
