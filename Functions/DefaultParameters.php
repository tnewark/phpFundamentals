<?php

function booksByAuthorYear($tempAuthorName, $tempYear = 1910)
{
    echo $tempYear;
    echo "\n";
    echo $tempAuthorName;
    echo "\n";
}

$year = 1920;
$authorName = "Wiliam Shakespeare";

booksByAuthorYear($authorName, $year);
booksByAuthorYear($authorName);


