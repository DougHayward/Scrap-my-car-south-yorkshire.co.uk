<?php
/**
 * User: dHayward
 * Date: 6/10/17
 * Time: 9:59 PM
 */
namespace Application;

use Application\Model\{Car, Person};
use SendGrid\{Email, Content, Mail};

class EmailController
{


    public function processForm(){
        print "got a";
        $car = new Car($_POST);
        $person = new Person($_POST);
        $this->sendRequestEmail($car, $person);
        $this->sendConfirmationEmail($car, $person);
        print "got b ";
    }

    public function sendRequestEmail(Car $car, Person $person)
    {
        print "GOT 1";
        $from = new Email($person->getName(), $person->getEmail());
        $subject = "Quote Requested on Scrap-my-car-south-yorkshire.co.uk";
        $to = new Email("Jason", "doug@bonniechef.com");
        $content = new Content("text/plain", "and easy to do anywhere, even with PHP");
        $mail = new Mail($from, $subject, $to, $content);
        $apiKey = getenv('SENDGRID_API_KEY');
        $sg = new \SendGrid($apiKey);
        $sg->client->mail()->send()->post($mail);
        PRINT "GOT 2";
    }

    public function sendConfirmationEmail(Car $car, Person $person)
    {
        PRINT "GOT 3";
        $from = new Email("Jason", "doug@bonniechef.com");
        $subject = "Quote Requested on Scrap-my-car-south-yorkshire.co.uk";
        $to = new Email($person->getName(), $person->getEmail());
        $content = new Content("text/plain", "and easy to do anywhere, even with PHP");
        $mail = new Mail($from, $subject, $to, $content);
        $mail->
        $apiKey = getenv('SENDGRID_API_KEY');
        $sg = new \SendGrid($apiKey);
        $response = $sg->client->mail()->send()->post($mail);
        PRINT "GOT 4";
    }

}