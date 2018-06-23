<?php

$authors = array(
    "Charles Dickens", 
    "Jane Austin", 
    "William Shakespeare",
    "Mark Twain", 
    "Louisa May Alcott"
);

$authorsAssociative = array(
    "poetic" => "William Shakespeare",
    "brilliant" => "Jane Austin", 
    "quarky" => "Charles Dickens", 
);


sort($authors);

print_r($authors);

# if you use sort on an associative array, it is transformed into and indexed array

asort($authorsAssociative);
print_r($authorsAssociative);

# calling asort on an indexed array shuffles the keys, treating it as an associateive array

ksort($authorsAssociative);
print_r($authorsAssociative);

# indexed arrays are already sorted by their keys, so using this is not needed