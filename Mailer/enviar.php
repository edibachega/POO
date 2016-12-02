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
$server->setUsername('email@email.com.br');
$server->setPassword('hahaha');

$carteira = Swift_Mailer::newInstance($server);

$carteira->send($mail);