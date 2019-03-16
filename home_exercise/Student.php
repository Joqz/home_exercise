<?php

class Student extends Person
{
    private $selectedCourses=array();
    private $creditPoints;

    function __construct($fname=null, $lname=null, $yob=null, $creP=null)
    {
        $this->setFirstName($fname);
        $this->setLastName($lname);
        $this->setYearOfBirth($yob);
        $this->creditPoints = $creP;
    }

    public function setCourses($value)
    {
        array_push($this->selectedCourses,$value);
    }

    public function getCourses()
    {
        return $this->selectedCourses;
    }

    public function setCreditPoints($value)
    {
        $this->creditPoints = $value;
    }

    public function getCreditPoints()
    {
        return $this->creditPoints;
    }
}
?>