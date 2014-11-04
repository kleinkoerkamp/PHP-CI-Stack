<?php
/**
 * Created by PhpStorm.
 * User: frankkleinkoerkamp
 * Date: 4-11-2014
 * Time: 14:27
 */

class User {
    private $firstName;
    private $lastName;

    function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
} 