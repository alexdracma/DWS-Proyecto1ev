<?php

namespace biblioteca\app\utils;

use biblioteca\core\App;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;

class MyMail {
    private $mailer;

    public function __construct() {

        $config = App::get('config')['email'];

        //Creation of the transport object
        $transport = (new Swift_SmtpTransport($config['smtp_server'],$config['smtp_port'], $config['smtp_security']))
            ->setUsername($config['username'])
            ->setPassword($config['password'])
        ;

        //Creation of mailer object
        $this->mailer = new Swift_Mailer($transport);
    }

    public function send($asunto, $mailTo, $nameTo, $mensaje) {
        $message = (new Swift_Message($asunto))
            ->setFrom(['alexdracma@gmail.com' => 'Alex López'])
            ->setTo([$mailTo => $nameTo])
            ->setBody($mensaje)
        ;

        $result = $this->mailer->send($message);
    }
}