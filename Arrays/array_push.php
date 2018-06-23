<?php

$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare");

array_push($authors, "Louisa May Alcott");

print_r($authors);

# equivaltent and preferrred... with create an array
$authors[] = "L. M. Mongomery";

print_r($authors);

# transform into associative array
$authors['quarky'] = "Charles Dickens";
print_r($authors);