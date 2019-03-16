<?php

abstract class Person
{
    private $firstName;
    private $lastName;
    private $yearOfBirth;

    public function setFirstName($value)
    {
        $this->firstName = $value;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setLastName($value)
    {
        $this->lastName = $value;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setYearOfBirth($value)
    {
        $this->yearOfBirth = $value;
    }

    public function getYearOfBirth()
    {
        return $this->yearOfBirth;
    }

    public function getAge()
    {
        $this_year=date("Y");
        $age=$this_year - $this->getYearOfBirth();
        return $age;
    }
}
?>