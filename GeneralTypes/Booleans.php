<?php

$bool = true;
$bool1 = false;

$hasValue = 1234;
$hasValue1 = "";
$hasValue2 = "tom";
$hasValue3 = 0;


var_dump($bool);
var_dump($bool1);

var_dump($hasValue);
var_dump((bool) $hasValue);

var_dump($hasValue1);
var_dump((bool) $hasValue1);

var_dump($hasValue2);
var_dump((bool) $hasValue2);

var_dump($hasValue3);
var_dump((bool) $hasValue3);

