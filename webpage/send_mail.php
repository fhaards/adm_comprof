<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
$mail = new PHPMailer(true);
$name = $_POST['name'];
$subject = $_POST['subject'];
$email_user = $_POST['email'];
$message = $_POST['message'];
try {
    $email_company = "adidayamitrakom@gmail.com";
    $name_company = "PT Adidaya Duta Mitrakom";
    $email_to_admin =  "<html>
                            <head>
                                <title></title>
                                <link href='https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap' rel='stylesheet'>
                                <link href='https://unpkg.com/boxicons@2.0.8/css/boxicons.min.css' rel='stylesheet'>
                                <style>
                                    #mail-messages {
                                        font-family: 'DM Sans', sans-serif;
                                        background-color: #f5f5f5;
                                        width: 70%;
                                        border-radius: 4px;
                                        border: 1px solid #e0e0e0;
                                    }
                            
                                    #mail-messages .mail-head {
                                        width: 80%;
                                        margin-left: auto;
                                        margin-right: auto;
                                        padding-top: 30px;
                                        text-align: center;
                                    }
                            
                                    #mail-messages .mail-content {
                                        width: 80%;
                                        margin-left: auto;
                                        margin-right: auto;
                                        font-size: 14px;
                                        padding: 30px 0px;
                                        color: #1b1b1b;
                                        text-align: justify;
                                    }
                            
                                    #mail-messages .mail-content .content-msg span {
                                        font-weight: 700;
                                    }
                            
                                    #mail-messages .mail-footer {
                                        width: 80%;
                                        margin-left: auto;
                                        margin-right: auto;
                                    }
                            
                                    #mail-messages .mail-footer ul {
                                        margin: 0;
                                        padding: 30px 0px;
                                        height: auto;
                                        display: flex;
                                    }
                            
                                    #mail-messages .mail-footer ul li {
                                        list-style-type: none;
                                        display: flex;
                                        align-content: center;
                                        align-items: center;
                                        justify-content: center;
                                        margin-right: 40px;
                                    }
                            
                                    #mail-messages .mail-footer ul li i {
                                        font-size: 12px;
                                    }
                            
                                    #mail-messages .mail-footer ul li span {
                                        padding-left: 10px;
                                        color: #616161
                                    }
                            
                                    #mail-messages .mail-footer ul li span h5 {
                                        margin-bottom: 0px;
                                        color: #1b1b1b;
                                    }
                                </style>
                            </head>
                            
                            <body>
                                <div id='mail-messages'>
                                    <div class='mail-head'>
                                        <h1>PT. Adidaya Duta Mitrakom</h1>
                                        <hr>
                                    </div>
                                    <div class='mail-content'>
                                        <div class='content-msg'>
                                            <span>From : </span>" . $name . " (  " . $email_user . " ) <br>
                                            <span>Messages : </span>
                                            <p>
                                               " . $message . "
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </body>
                            </html>";

    $mail->IsSMTP(true);
    $mail->SMTPAuth   = true;
    $mail->Host = "smtp.hostinger.com";
    $mail->SMTPSecure = "ssl";
    $mail->Port = "465";

    //USERNAME PASSWORD
    $mail->Username = "mail@admitrakom.com";
    $mail->Password = "Pamulang123";

    ///SET RECEPIENTS
    $mail->SetFrom("mail@admitrakom.com", "Webmail - PT. Adidaya Duta Mitrakom ");
    $mail->AddAddress($email_company, $name_company);
    $mail->AddReplyTo($email_user, $name);
    $mail->Subject = '[ Do not reply ] - ' . $subject;
    $mail->MsgHTML($email_to_admin);
    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
