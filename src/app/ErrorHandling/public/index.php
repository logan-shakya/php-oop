<?php

use App\ErrorHandling\Customer;
use App\ErrorHandling\Invoice;
use App\ErrorHandling\MissingBillingInfoException;

require_once __DIR__ . '/../../../../vendor/autoload.php';

var_dump(process());

function process() 
{
    $invoice = new Invoice(new Customer());

    try {
        $invoice->process(-25);
        return true;

    } catch (\Exception $e) {
        echo $e->getMessage() . ' ' . $e->getFile() . ' ' . $e->getLine() . PHP_EOL;

        return false;
    } finally {
        echo 'Finally block' . PHP_EOL;
    }
}

// set_exception_handler(function(\Throwable $e) {
//     var_dump($e->getMessage());
// });

// echo array_rand([], 1);