<?php

namespace App\Core;

class Mail
{
    private string $from;

    private string $to;

    private string $subject;

    private string $message;

    private string $headers;

    public function __construct(string $email_to, string $subject, string $message, string $headers)
    {
    }

    public function getFrom()
    {
    }

    public function setTo()
    {
    }

    public function getSubject()
    {
    }

    public function setSubject()
    {
    }

     public function setHeaders() 
     {
     }


    // $from = "emailtest@YOURDOMAIN";
    // $to = "YOUREMAILADDRESS";
    // $subject = "PHP Mail Test script";
    // $message = "This is a test to check the PHP Mail functionality";
    // $headers = "From:" . $from;

}
