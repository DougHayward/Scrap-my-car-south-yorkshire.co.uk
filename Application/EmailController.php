<?php
/**
 * User: dHayward
 * Date: 6/10/17
 * Time: 9:59 PM
 */
namespace Application;

use Application\Model\{Car, Person};
use SendGrid;
use SendGrid\Email;
use SendGrid\Content;
use SendGrid\Mail;

class EmailController
{


    public function processForm(){
        $car = new Car($_POST);
        $person = new Person($_POST);
        $this->sendRequestEmail($car, $person);
        $this->sendConfirmationEmail($car, $person);
    }

    public function sendRequestEmail(Car $car, Person $person)
    {
        $from = new Email($person->getName(), $person->getEmail());
        $subject = "Quote Requested on RemoveMyCarSouthYorkshire.co.uk";
        $to = new Email("Jason", "doug@bonniechef.com");
        $content = new Content("text/html", "An email from RemoveMyCarSouthYorkshire.co.uk");
        $subs = new SendGrid\Personalization();
        $subs->addTo($to);
        $subs
            ->addSubstitution("%name%",$person->getName())
            ->addSubstitution("%email%",$person->getEmail())
            ->addSubstitution("%phone%",$person->getPhone())
            ->addSubstitution("%address%",$person->getAddress())
            ->addSubstitution("%postcode%",$person->getPostcode())
            ->addSubstitution("%make%",$car->getMake())
            ->addSubstitution("%model%",$car->getModel())
            ->addSubstitution("%runner%",$car->getRunner())
            ->addSubstitution("%keys%",$car->getKeys())
            ->addSubstitution("%registration%",$car->getRegistration())
        ;
        $mail = new Mail($from, $subject, $to, $content);
        $mail->addPersonalization($subs);
        $mail->setTemplateId("2ab72d9e-217e-40e6-a5dc-67e162a13dc4");
        $apiKey = getenv('SENDGRID_API_KEY');
        $sg = new \SendGrid($apiKey);
        $sg->client->mail()->send()->post($mail);

    }

    public function sendConfirmationEmail(Car $car, Person $person)
    {
        $from = new Email("Jason", "info@removemyCarSouthYorkshire.co.uk");
        $subject = "Confirmation of Quote Requested on RemoveMyCarSouthYorkshire.co.uk";
        $to = new Email($person->getName(), $person->getEmail());
        $content = new Content("text/html", "An email from RemoveMyCarSouthYorkshire.co.uk");
        $subs = new SendGrid\Personalization();
        $subs->addTo($to);
        $subs
            ->addSubstitution("%name%",$person->getName())
            ->addSubstitution("%email%",$person->getEmail())
            ->addSubstitution("%phone%",$person->getPhone())
            ->addSubstitution("%address%",$person->getAddress())
            ->addSubstitution("%postcode%",$person->getPostcode())
            ->addSubstitution("%make%",$car->getMake())
            ->addSubstitution("%model%",$car->getModel())
            ->addSubstitution("%runner%",$car->getRunner())
            ->addSubstitution("%keys%",$car->getKeys())
            ->addSubstitution("%registration%",$car->getRegistration())
        ;
        $mail = new Mail($from, $subject, $to, $content);
        $mail->addPersonalization($subs);
        $mail->setTemplateId("2ab72d9e-217e-40e6-a5dc-67e162a13dc4");
        $apiKey = getenv('SENDGRID_API_KEY');
        $sg = new \SendGrid($apiKey);
        $sg->client->mail()->send()->post($mail);
    }

}