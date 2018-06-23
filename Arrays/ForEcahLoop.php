<?php

$authors = array(
    "Charles Dickens", 
    "Jane Austin", 
    "William Shakespeare",
    "Mark Twain", 
    "Louisa May Alcott"
);

$authorsAssociative = array(
    "quarky" => "Charles Dickens", 
    "brilliant" => "Jane Austin", 
    "poetic" => "William Shakespeare"
);

foreach($authorsAssociative as $val)
{
    echo $val."\n";
}


foreach ($authorsAssociative as $key => $value)
{
    echo $key." => ".$value."\n";
}