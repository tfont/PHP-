<?php

require_once 'autoloader.php';

use \String           as String;
use \AssociativeArray as AssociativeArray;

use const \OPEN_FILE_READ_START as OPEN_FILE_READ_START;
use const \PHP_EOL              as PHP_EOL;

// --------------------------------------------------- //

var_dump(OPEN_FILE_READ_START); // r

var_dump(String::FindInitMaskLength('abc', 'abcdef123')); // 0

var_dump(AssociativeArray::isAssociative([0 => TRUE, 1 => 1])); // false
var_dump(AssociativeArray::isAssociative([0 => TRUE,'A' => 1])); // true


var_dump(PHP_EOL);

