<?php

use App\Superglobals\Classes\Home;
use App\Superglobals\Classes\Invoices;
use App\Superglobals\Router;

require_once __DIR__ . '/../../../../vendor/autoload.php';

// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';

$router = new Router();

$router->register('/', [Home::class, 'index'])
        ->register('/invoices', [Invoices::class, 'index'])
        ->register('/invoices/create', [Invoices::class, 'create']);

$router->register('/invoices', function() {
    echo 'Invoices';
});

echo '<pre>';
print_r($_SERVER);
echo '</pre>';

die; 

echo $router->resolve($_SERVER['REQUEST_URI']);