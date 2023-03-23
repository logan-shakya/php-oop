<?php

declare(strict_types=1);

namespace App\MVC\Controllers;

use App\MVC\View;

class InvoicesController
{
    public function index(): string
    {
        return (new View('invoices/index'))->render();
    }

    public function create(): string
    {
        return (new View('invoices/create'))->render();
    }

    public function store()
    {
        $amount = $_POST['amount'];

        var_dump($amount);
    }
}
