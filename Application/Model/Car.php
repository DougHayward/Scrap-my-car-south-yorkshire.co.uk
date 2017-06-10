<?php
/**
 * User: doug-hayward
 * Date: 6/10/17
 * Time: 10:02 PM
 */

namespace Application\Model;


class Car
{
    /* @var $make string */
    private $make;
    /* @var $model string */
    private $model;
    /* @var $registration string */
    private $registration;
    /* @var $keys integer */
    private $keys;
    /* @var $runner string */
    private $runner;

    function __construct()
    {
        $this
            ->setMake($_POST['car_make']??null)
            ->setModel($_POST['car_model']??null)
            ->setRegistration($_POST['car_registration']??null)
            ->setKeys($_POST['car_keys']??null)
            ->setRunner($_POST['car_runner']??null)
        ;
    }

    /**
     * @return string
     */
    public function getMake(): string
    {
        return $this->make;
    }

    /**
     * @param string $make
     * @return Car
     */
    public function setMake(string $make): Car
    {
        $this->make = $make;
        return $this;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     * @return Car
     */
    public function setModel(string $model): Car
    {
        $this->model = $model;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegistration(): string
    {
        return $this->registration;
    }

    /**
     * @param string $registration
     * @return Car
     */
    public function setRegistration(string $registration): Car
    {
        $this->registration = $registration;
        return $this;
    }

    /**
     * @return int
     */
    public function getKeys(): int
    {
        return $this->keys;
    }

    /**
     * @param int $keys
     * @return Car
     */
    public function setKeys(int $keys): Car
    {
        $this->keys = $keys;
        return $this;
    }

    /**
     * @return string
     */
    public function getRunner(): string
    {
        return $this->runner;
    }

    /**
     * @param string $runner
     * @return Car
     */
    public function setRunner(string $runner): Car
    {
        $this->runner = $runner;
        return $this;
    }

}