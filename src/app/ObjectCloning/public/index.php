<?php

use App\ObjectCloning\Invoice;

require_once '../../../../vendor/autoload.php';

$invoice = new \App\ObjectCloning\Invoice();

$invoice2 = new $invoice;

var_dump($invoice, $invoice2, Invoice::create());