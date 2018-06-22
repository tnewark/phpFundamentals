<?php
$currency = "penny";

$sampleString = "A $currency saved is a $currency earned\n";

# replacement done
echo $sampleString;

$var = 2;

echo "${var}nd place\n";
echo $var."nd place\n";

$misc = "St. Patrick's Day\n";
echo $misc;

$misc = "St. Patrick\"s Day\n";
echo $misc;
