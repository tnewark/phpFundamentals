<?php

$quote = "Courage is resistance to fear, mastery of fear, not absence of fear.";

echo strpos($quote, "fear");
echo "\n";
echo strpos($quote, "fear", 26);
echo "\n";
# strpos is case sensitive
echo strpos($quote, "c");
echo "\n";
echo strpos($quote, "C");
echo "\n";
# return empty string
echo strpos($quote, "z");
