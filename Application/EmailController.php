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
        $subs = new SendGrid\Personalization();
        $subs->addTo($to);
        $subs->addSubstitution("%name%",$person->getName());
        $subs->addSubstitution("%email%",$person->getEmail());
        $subs->addSubstitution("%phone%",$person->getPhone());
        $subs->addSubstitution("%address%",$person->getAddress());
        $subs->addSubstitution("%postcode%",$person->getPostcode());
        $subs->addSubstitution("%make%",$car->getMake());
        $subs->addSubstitution("%model%",$car->getModel());
        $subs->addSubstitution("%runner%",$car->getRunner());
        $subs->addSubstitution("%keys%",$car->getKeys());
        $subs->addSubstitution("%registration%",$car->getRegistration());
        $mail->addPersonalization($subs);
        $mail->setFrom($from);
        $mail->setSubject($subject);
        $mail->setTemplateId("2ab72d9e-217e-40e6-a5dc-67e162a13dc4");
        $apiKey = getenv('SENDGRID_API_KEY');
        $sg = new \SendGrid($apiKey);
        $response = $sg->client->mail()->send()->post($mail);

        print_R($response);

    }

    public function sendConfirmationEmail(Car $car, Person $person)
    {
        $from = new Email("Jason", "info@removemyCarSouthYorkshire.co.uk");
        $subject = "Confirmation of Quote Requested on RemoveMyCarSouthYorkshire.co.uk";
        $to = new Email($person->getName(), $person->getEmail());

        $subs = new SendGrid\Personalization();
        $subs->addTo($to);
        $subs->addSubstitution("%name%",$person->getName());
        $subs->addSubstitution("%email%",$person->getEmail());
        $subs->addSubstitution("%phone%",$person->getPhone());
        $subs->addSubstitution("%address%",$person->getAddress());
        $subs->addSubstitution("%postcode%",$person->getPostcode());
        $subs->addSubstitution("%make%",$car->getMake());
        $subs->addSubstitution("%model%",$car->getModel());
        $subs->addSubstitution("%runner%",$car->getRunner());
        $subs->addSubstitution("%keys%",$car->getKeys());
        $subs->addSubstitution("%registration%",$car->getRegistration());
        $mail->addPersonalization($subs);
        $mail->setFrom($from);
        $mail->setSubject($subject);

        $mail->setTemplateId("2ab72d9e-217e-40e6-a5dc-67e162a13dc4");
        $apiKey = getenv('SENDGRID_API_KEY');
        $sg = new \SendGrid($apiKey);
        $response = $sg->client->mail()->send()->post($mail);

        print_R($response);
    }

}