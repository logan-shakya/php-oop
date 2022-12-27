<?php

namespace App\ErrorHandling;

class InvoiceException extends \Exception
{
    public static function missingBillingInfo(): static
    {
        return new static('Missing Billing Info');
    }

    public static function invalidAmount(): static
    {
        return new static('Invalid invoice amount');
    }
}