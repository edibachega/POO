<?php

//https://packagist.org

require_once './vendor/autoload.php';

//swiftmailer.org

$mail = Swift_Message::newInstance();

$mail->setFrom("elaborata@elaborata.com.br");

$mail->setTo("edibachega@gmail.com");

$mail->setSubject("Cuidado para não atrasar");

$mail->setBody("bla bla bla bla bla bla bla bla bla");

$server = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl');
$server->setUsername('ebachega@nordtech.com.br');
$server->setPassword('Fagote00');

$carteira = Swift_Mailer::newInstance($server);

$carteira->send($mail);