<?php

namespace App\ErrorHandling;

class Invoice
{
    public function __construct(public Customer $customer)
    {
        
    }

    public function process(float $amount): void
    {
        if($amount <= 0) {
            throw new \InvalidArgumentException('Invalid invoice amount'); // 1 way: if exception is general
        }

        if(empty($this->customer->getBillingInfo())){
            throw InvoiceException::missingBillingInfo(); //2nd way: if exception is specific and got more exceptions in whole program use static method
        }

        echo 'Processing $' . $amount . ' invoice - ';

        sleep(1);

        echo 'OK' . PHP_EOL;
    }
}