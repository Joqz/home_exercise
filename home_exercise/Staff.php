<?php

class Staff extends Person
{
  private $vacancy;
  
  function __construct($fname=null, $lname=null, $yob=null, $vac=null)
  {
    $this->setFirstName($fname);
    $this->setLastName($lname);
    $this->setYearOfBirth($yob);
    $this->vacancy=$vac;
  }

  public function setVacancy($value)
  {
    $this->vacancy=$value;
  }

  public function getVacancy()
  {
    return $this->vacancy;
  }
}

?>