<?php

use App\Serialize\Invoice;

require_once '../../../../vendor/autoload.php';

$invoice = new Invoice(25000, 'Invoice 1', '123fvvr12323');

$str = serialize($invoice);
$invoice2 = unserialize($str);