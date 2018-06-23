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
    function __construct() 
    {
        $this->firstName = "Samuel Langhorne";
        $this->lastName = "Clemens";
        $this->yearBorn = 1899;
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

$myObject = new Person();
echo $myObject->GetFirstName();
