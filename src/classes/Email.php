<?php

use PHPMailer\PHPMailer\PHPMailer;

class Email extends PHPMailer
{
    public function send()
    {
        return 'Enviar email!';
    }
}
