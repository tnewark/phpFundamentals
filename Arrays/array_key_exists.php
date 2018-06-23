<?php 

$authors = array("Charles Dickens", "Jane Austin", "William Shakesperae");

$authorsAssociative = array(
    "quarky" => "Charles Dickens", 
    "brilliant" => "Jane Austin", 
    "poetic" => "William Shakespeare"
);

echo $authors[1];
echo "\n";

echo $authorsAssociative["quarky"];
echo "\n";

echo array_key_exists(5, $authors);
echo "\n";

echo array_key_exists(2, $authors);
echo "\n";

echo array_key_exists("poetic", $authorsAssociative);
echo "\n";

echo array_key_exists("cranky", $authorsAssociative);
echo "\n";

