<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Email
 *
 * @author aldo
 */

namespace App\Helpers\PHPMailer;

//define('PATH', "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");


use App\Helpers\PHPMailer\PHPMailer;
use App\Helpers\PHPMailer\Exception;

class Email {
    
    private $email;
    private $mensagem;
    private $assunto;
    private $mail;
    
    public function __construct($email, $assunto, $mensagem) {
        
        $phpmailer      = new PHPMailer();
        $this->mail     = $phpmailer;
        
        $this->email    = $email;
        $this->assunto  = $assunto;
        $this->mensagem = $mensagem;
        
        try {
            //Server settings
            //$mail->SMTPDebug = 2;                                  // Enable verbose debug output
            $this->mail->SMTPDebug = false; 
            $this->mail->SMTPAuth = true;// Enable verbose debug output
            $this->mail->isSMTP();                                      // Set mailer to use SMTP
            $this->mail->Host = 'smtp.officetotal.com.br';                     // Specify main and backup SMTP servers                   // Specify main and backup SMTP servers                               // Enable SMTP authentication
            $this->mail->Username = 'naoresponda@officetotal.com.br';                 // SMTP username               // SMTP username
            $this->mail->Password = 'Oft2019Sol';                          // SMTP password;                          // SMTP password
            //$this->mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted     
            $this->mail->SMTPAutoTLS = false; 
            $this->mail->SMTPSecure = false;                        
            $this->mail->Port = 587;                                    // TCP port to connect to                                  // TCP port to connect to
            $this->mail->CharSet = 'UTF-8';
            //Recipients
            //$this->mail->setFrom('pablo.oliveira@officetotal.com.br');
            $this->mail->setFrom('suporte.sistemas@officetotal.com.br');
            //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
            $this->mail->addAddress($this->email);                           // Name is optional                           // Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');
            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            //Content
            $this->mail->isHTML(true);                                 // Set email format to HTML
            $this->mail->Subject = $this->assunto;
            //$mail->Body = 'This is the HTML message body <b>in bold!</b>';
            $this->mail->Body = $this->mensagem;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $this->mail->send();
            //echo 'Mensagem enviada com sucesso';
        } catch (Exception $e) {
            //echo 'Erro ao enviar mensagem: ', $this->mail->ErrorInfo;
        }
    }
}
