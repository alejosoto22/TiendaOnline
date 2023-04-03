<?php
//use PHPMailer\PHPMailer\{PHPMailer, SMTP, Exception};

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
require '../phpmailer/src/Exception.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // SMTP::DEBUG_OFF;
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';   // Este es el que usa Google (verificar el del dominio de la empresa)                  
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'alejandro.soto@utp.edu.co';                     
    $mail->Password   = 'Karenhellen22';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                  // use 587 `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('alejandro.soto@utp.edu.co', 'Tienda Online Alejo'); // De donde se envía
    $mail->addAddress('alejosoto222@gmail.com', 'QUIEN RECIBE LA INFORMACIÓN');     // el correo que recibe toda la información
    $mail->addAddress('alejosoto22@hotmail.com');               //si son varias cuentas que reciben la info
    // $mail->addReplyTo('info@example.com', 'Information'); // correo donde nos pueden responder
    // $mail->addCC('cc@example.com'); // para enviar copias a otos correos
   //  $mail->addBCC('bcc@example.com'); // para enviar copias a otos correos

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Datos de su compra.'; // Titulo

    $cuerpo = '<h4>Gracias por su compra</h4>';
    $cuerpo .= '<p>Su pago fue realizado con éxito.<b><p>El ID de su compra es <b>' . $id_transaccion . '</b></p>';

    $mail->Body    = utf8_decode($cuerpo); // Cuerpo del mensaje

    $mail->AltBody = 'Le enviamos la información de su compra.'; // En caso de que no pueda visualizar el HTML

    //$mail->setLanguage('es','../phpmailer/language/phpmailer.lang-es.php');

    $mail->send();
    // echo 'Message has been sent';
} catch (Exception $e) {
    echo "Error al enviar el correo electrónico de confirmación de la compra: {$mail->ErrorInfo}";
   //exit;
}