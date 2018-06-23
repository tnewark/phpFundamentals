<?php

class Person
{
    // constants can be math equations, can't use members
    const AVG_LIFE_SPAN = 79;

    // default values must be instances, no function calls
    public $firstName;
    public $lastName;
    public $yearBorn;

    // methods default to public access
    function __construct($tempFirst = "", $tempLast = "", $tempBorn = "") 
    {
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempBorn;
    }
 
    public function GetFirstName()
    {
        return $this->firstName;
    }

    public function SetFirstName($tempName)
    {
        $this->firstName = $tempName;
    }
}

$myObject = new Person("Samuel Langhorne", "Clemens", 1899);
echo $myObject->GetFirstName();
