<?php

namespace App\ErrorHandling;

class MissingBillingInfoException extends \Exception
{
    public $message = 'Missing billing information';
}