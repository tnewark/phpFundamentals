<?php

$authors = [
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


print_r($authors);

print_r($authors["Male"]);

print_r($authors["Male"]["Mark Twain"]);

print_r($authors["Male"]["Mark Twain"][1]);
