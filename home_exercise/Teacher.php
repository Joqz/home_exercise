<?php

class Teacher extends Person
{
    private $teachingSubjects=array();
    private $department;

    function __construct($fname=null, $lname=null, $yob=null, $dep=null)
    {
        $this->setFirstName($fname);
        $this->setLastName($lname);
        $this->setYearOfBirth($yob);
        $this->department=$dep;
    }

    public function setTeachingSubjects($value)
    {
        array_push($this->teachingSubjects,$value);
    }

    public function getTeachingSubjects()
    {
        return $this->teachingSubjects;
    }

    public function setDepartment($value)
    {
        $this->department=$value;
    }

    public function getDepartment()
    {
        return $this->department;
    }

}
?>