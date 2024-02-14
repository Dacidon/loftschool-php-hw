<?php
require_once './vendor/autoload.php';

$transport = (new Swift_SmtpTransport('smtp.mail.ru', 465))
    ->setUsername('thremormagia@mail.ru')
    ->setPassword('there was password')
    ->setEncryption('SSL')
;

$mailer = new Swift_Mailer($transport);

$message = (new Swift_Message('Wonderful Subject'))
    ->setFrom(['thremormagia@mail.ru' => 'thremormagia@mail.ru'])
    ->setTo(['dacidon@yandex.ru'])
    ->setBody('Here is the message itself')
;

$result = $mailer->send($message);
