<?php

class Author extends Person
{
    public static $centuryPopular = "19th";
    private $penName = "Mark Twain";

    public function getPenName()
    {
        return $this->penName.PHP_EOL;
    }

    public function getCompleteName()
    {
        return $this->GetFullName()." a.k.a. ".$this->penName.PHP_EOL;
    }

    public static function getCenturyAuthorWasPopular()
    {
        // for accessing parent statics, use 'parent' instead of 'self'
        return self::$centuryPopular;
    }
}
