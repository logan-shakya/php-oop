<?php
require_once __DIR__ . '../../../../../vendor/autoload.php';
use App\MaginMethods\Invoice;

$invoice = new Invoice;
// var_dump($invoice);
// $invoice->amount = 35;
// $invoice->value = 23;

// echo $invoice->amount . PHP_EOL;
// echo $invoice->value . PHP_EOL;

$invoice->process(14, "Some Description");
