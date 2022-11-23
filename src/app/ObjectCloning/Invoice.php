<?php

namespace App\ObjectCloning;

class Invoice
{
    private string $id;

    public function __construct()
    {
        $this->id = uniqid('invoice_');
        var_dump('__construct');
    }

    public function __clone()
    {
        $this->id = uniqid('invoice_');
        var_dump('__clone');
    }
}