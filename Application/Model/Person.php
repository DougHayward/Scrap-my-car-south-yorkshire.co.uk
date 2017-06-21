<?php
/**
 * User: dHayward
 * Date: 6/10/17
 * Time: 10:02 PM
 */

namespace Application\Model;


class Person
{
    /* @var $name string */
    private $name;
    /* @var $email string */
    private $email;
    /* @var $address string */
    private $address;
    /* @var $postcode string */
    private $postcode;
    /* @var $phone string */
    private $phone;

    function __construct($post)
    {
       $this
           ->setName($_POST['name']??"Not set")
           ->setEmail($_POST['email']??"Not set")
           ->setAddress($_POST['address']??"Not set")
           ->setPostcode($_POST['postcode']??"Not set")
           ->setPhone($_POST['phone']??"Not set")
       ;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Person
     */
    public function setName(string $name): Person
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return Person
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return Person
     */
    public function setAddress(string $address): Person
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }

    /**
     * @param string $postcode
     * @return Person
     */
    public function setPostcode(string $postcode): Person
    {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return Person
     */
    public function setPhone(string $phone): Person
    {
        $this->phone = $phone;
        return $this;
    }


}