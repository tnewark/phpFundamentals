<?php

$authors = array(
    "Charles Dickens", 
    "Jane Austin", 
    "William Shakespeare",
    "Mark Twain", 
    "Louisa May Alcott"
);

echo count($authors);
echo "\n";

$authorsMd = [
    "Male" => array(
        "Charles Dickens" => array("A Christmas Carol", "Oliver Twist"),
        "William Shakespeare" => array("Romeo & Juliet", "Richard III"),
        "Mark Twain" => array("Tom Sawyer", "Huck Finn")
    ),
    "Female" => array(
        "L. M. Montgomery" => array("Anne of Green Gables", "Anne of Avonlee"),
        "Louisa May Alcott" => array("Little Women")
    )
];

echo count($authorsMd);
echo "\n";

echo count($authorsMd, COUNT_RECURSIVE);
