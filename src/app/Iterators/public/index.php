<?php

use App\Iterators\Invoice;
use App\Iterators\InvoiceCollection;
use App\Iterators\InvoiceCollectionAggregate;

require_once __DIR__ . '/../../../../vendor/autoload.php';


// $invoiceCollection = new InvoiceCollection([new Invoice(15), new Invoice(25), new Invoice(50)]);

// foreach($invoiceCollection as $invoice){
//     echo $invoice->id . '-' . $invoice->amount . PHP_EOL;
// }

$invoiceCollectionAggregate = new InvoiceCollectionAggregate([new Invoice(15), new Invoice(25), new Invoice(50)]);

foreach($invoiceCollectionAggregate as $invoice){
    echo $invoice->id . '-' . $invoice->amount . PHP_EOL;
}

foo($invoiceCollectionAggregate);
foo([1,2,3]);

//iterable is new data type for iterable object or array.
function foo(iterable $iterable)
{
    foreach($iterable as $i => $item) {
        echo $i . PHP_EOL;
    }
}

//Advantage of using iterator is, it allows lazy loading and reduce memory usage.