<?php
use PHPMailer\PHPMailer\{PHPMailer, SMTP, Exception};

require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
require '../phpmailer/src/Exception.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // SMTP::DEBUG_OFF;
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'alejosoto222@gmail.com';                     
    $mail->Password   = 'Alejoyorle22';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                  // use 587 `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('alejosoto222@gmail.com', 'TIENDA ONLINE ALEJO');
    $mail->addAddress('alejandro.soto@utp.edu.co', 'QUIEN RECIBE LA INFORMACIÓN');     // el correo que recibe toda la información
    //$mail->addAddress('ellen@example.com');               //si son varias cuentas que reciben la info
    // $mail->addReplyTo('info@example.com', 'Information'); // correo donde nos pueden responder
    // $mail->addCC('cc@example.com'); // para enviar copias a otos correos
   //  $mail->addBCC('bcc@example.com'); // para enviar copias a otos correos

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}