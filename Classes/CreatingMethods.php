<?php

class Person
{
    // constants can be math equations, can't use members
    const AVG_LIFE_SPAN = 79;

    // default values must be instances, no function calls
    public $firstName = "Samuel Langhorne";
    public $lastName = "Clemens";
    public $yearBorn = 1899;

    // methods default to public access
    public function GetFirstName()
    {
        
    }

    public function SetFirstName($tempName)
    {

    }
}

$myObject = new Person();