<?php
if (file_exists($php_email_form = '../PHPMailerTested/PHPmailerx/class.phpmailer.php')) {
    include($php_email_form);
} else {
    die('Unable to load the "PHP Email Form" Library!');
}

$email_corp = "m.fahmi37@gmail.com";
$name_corp = "Muhammad Fahmi";

$name = $_POST['name'];
$subject = $_POST['subject'];
$email_user = $_POST['email'];
$message = $_POST['message'];

include "../PHPMailerTested/PHPmailerx/class.phpmailer.php";
include "../PHPMailerTested/PHPmailerx/class.smtp.php";
$mail = new PHPMailer();
$body = 'ini nyoba doang';

//SET HOST
$mail->IsSMTP(true);
$mail->SMTPAuth   = true;
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = "ssl";
$mail->Port = "587"; //KATA IBAN KALO MASUK HOSTINGAN PORTNYA GANTI 465
$mail->Username = "m.fahmi37@gmail.com";
$mail->Password = "google37";

//SET RECEPIENTS
$mail->SetFrom($email_corp, $name_corp);
$mail->AddReplyTo("", "Testing");
$mail->IsHTML(true);
$mail->Subject = 'Hello There, No-reply :.';
$mail->MsgHTML($body);
$mail->AddAddress($email_user);

if (!$mail->Send()) {
    return false;
} else {
    return true;
}
