<?php

define('CHECK_CONSTATN', 'yES, i AM A CONSTANT!');

$intVar = 1234;
$stringVar = "I'm a String";
$boolVar = false;
$floatVar = 12.34;

echo is_int($intVar);
echo is_int($floatVar);

echo is_string($stringVar);
echo is_string($floatVar);

echo is_bool($boolVar);
echo is_bool($floatVar);

echo is_float($floatVar);
echo is_float($boolVar);

echo defined('CHECK_CONSTATN');
echo defined('BOGUS_CONSTANT');