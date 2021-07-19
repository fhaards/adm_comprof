<?php 

  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $email_user = $_POST['email'];
  $message = $_POST['message'];

  $body = 'ini nyoba doang';

  if( file_exists($php_email_form = '../vendor/PHPmailerx/class.phpmailers.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $email_corp = "m.fahmi37@gmail.com";
  $to = ($email_user && $email_corp);
  
  $mail = new PHPMailer();
  $mail->IsSMTP(true); // SMTP
  $mail->SMTPAuth   = true;  // SMTP authentication
  $mail->Host= "smtp.gmail.com";
  $mail->SMTPSecure = "ssl";
  $mail->Port = "587"; //KATA IBAN KALO MASUK HOSTINGAN PORTNYA GANTI 465
  $mail->SetFrom($email_corp,"Testing");
  $mail->Username = "no-reply@testing.com";  // username gmail yang akan digunakan untuk mengirim email
  $mail->Password = "google37";  // Password email
  $mail->AddReplyTo($email_corp, "Testing");
  $mail->Subject = $subject;
  $mail->MsgHTML($body);
  $address = $to;
  $mail->AddAddress($address, $to);
  $mail->AddAddress($email_user);
  $mail->AddAddress($email_corp);



  if(!$mail->Send()){
    return false;
  } else {
    return true;
  }

  Send_Mail($to,$subject,$body);

?>