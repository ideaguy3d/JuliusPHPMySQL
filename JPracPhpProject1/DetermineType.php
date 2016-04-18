<?php

define('CHECK_CONSTANT', "Yes, indeed I am a constant");

$intVar = 1234;
$stringVar = "I'm indeed a string";
$boolVar = false;
$floatVar = 12.34; 

echo is_int($floatVar);
echo is_string($stringVar);
//other checks is_bool() , is_float()
//defined('CHECK_CONSTANT');

