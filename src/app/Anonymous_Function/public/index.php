<?php

use App\Anonymous_Function\ClassA;

require_once '../../../../vendor/autoload.php';

$obj =  new ClassA(1,2);

var_dump($obj->bar());