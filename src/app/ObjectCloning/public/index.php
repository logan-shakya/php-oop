<?php

use App\ObjectCloning\Invoice;

require_once '../../../../vendor/autoload.php';

$invoice = new \App\ObjectCloning\Invoice();

$invoice2 = clone $invoice;
$invoice3 = $invoice;

echo("Object created: ");
var_dump($invoice);

echo("Cloned Object: ");
var_dump($invoice2);

echo("Created with = operator: ");
var_dump($invoice3);