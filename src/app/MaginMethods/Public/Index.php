<?php
require_once __DIR__ . '../../../../../vendor/autoload.php';
use App\MaginMethods\Invoice;

$invoice = new Invoice;

$invoice->amount = 35;

var_dump($invoice);