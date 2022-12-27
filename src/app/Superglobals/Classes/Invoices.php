<?php

declare(strict_types = 1);

namespace App\Superglobals\Classes;

class Invoices
{
    public function index(): string
    {
        return 'Invoices';
    }

    public function create(): string
    {
        return 'Create Invoices';
    }
}