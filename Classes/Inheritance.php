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
        echo "Person Contructor".PHP_EOL;
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

    public function GetFullName()
    {
        echo "Person->GetFullName".PHP_EOL;
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
}

class Author extends Person
{
    public $penName = "Mark Twain";

    public function getPenName()
    {
        return $this->penName.PHP_EOL;
    }

    public function GetFullName()
    {
        echo "Author->GetFullName".PHP_EOL;
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
}

$newAuthor = new Author("Samuel Langhorne", "Clemens", 1899);
echo $newAuthor->GetFullName();
