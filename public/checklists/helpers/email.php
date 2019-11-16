<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//require_once './template.php';
require_once '../../libs/PHPMailer/src/Exception.php';
require_once '../../libs/PHPMailer/src/PHPMailer.php';
require_once '../../libs/PHPMailer/src/SMTP.php';

//########## INICIO DA CONFIGURAÇÃO DE EMAIL #############

$mailDev = new PHPMailer\PHPMailer\PHPMailer();              // Passing `true` enables exceptions
try {
    //Server settings
    //$mail->SMTPDebug = 2;                                  // Enable verbose debug output
    $mailDev->SMTPDebug = false;                             // Enable verbose debug output
    $mailDev->isSMTP();                                      // Set mailer to use SMTP
    $mailDev->Host = 'mail.prixpay.com';                     // Specify main and backup SMTP servers
    $mailDev->SMTPAuth = true;                               // Enable SMTP authentication
    $mailDev->Username = 'postmaster@prixpay.com';                 // SMTP username
    $mailDev->Password = '1q2w3e!';                          // SMTP password
    $mailDev->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mailDev->Port = 587;                                    // TCP port to connect to
    $mailDev->CharSet = 'utf-8';
    //Recipients
    $mailDev->setFrom('contato@email.com', 'Email');
    //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mailDev->addAddress($email);                           // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');
    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    //Content
    $mailDev->isHTML(true);                                 // Set email format to HTML
    $mailDev->Subject = 'Assunto';
    //$mail->Body = 'This is the HTML message body <b>in bold!</b>';
    $mailDev->Body = $mensagem;//Vinda do template
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mailDev->send();
    //echo 'Message has been sent';
} catch (Exception $e) {
    //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
        
        //########## FIM DA CONFIGURAÇÃO DE EMAIL    #############
