<?php

class Person
{
    // constants can be math equations, can't use members
    const AVG_LIFE_SPAN = 79;

    // default values must be instances, no function calls
    protected $firstName;
    protected $lastName;
    protected $yearBorn;

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

    protected function GetFullName()
    {
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
}

class Author extends Person
{
    protected $penName = "Mark Twain";

    public function getPenName()
    {
        return $this->penName.PHP_EOL;
    }

    public function getCompleteName()
    {
        return $this->firstName." ".$this->lastName." a.k.a. ".$this->penName.PHP_EOL;
    }
}

$newAuthor = new Author("Samuel Langhorne", "Clemens", 1899);

echo $newAuthor->getCompleteName();