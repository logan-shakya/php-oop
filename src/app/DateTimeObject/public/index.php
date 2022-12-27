<?php

require_once '../../../../vendor/autoload.php';

$dateTime =  new DateTime('now');

echo $dateTime->getTimezone()->getName() . '-' . $dateTime->format('m/d/Y g:i A') . PHP_EOL;

$dateTime->setDate(2023, 1, 24)->setTime(00, 00);
$dateTime->setTimezone(new DateTimeZone('Asia/Kathmandu'));

echo $dateTime->getTimezone()->getName() . '-' . $dateTime->format('m/d/Y g:i A') . PHP_EOL;