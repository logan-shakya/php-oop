<?php

use App\Superglobals\Classes\Home;
use App\Superglobals\Classes\Invoices;
use App\Superglobals\Router;
use App\Superglobals\Upload\Home as UploadHome;

require_once __DIR__ . '/../../../../vendor/autoload.php';

define('STORAGE_PATH', __DIR__ . '/../Storage');

// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';

$router = new Router();

$router->get('/', [Home::class, 'index'])
        ->post('/upload', [UploadHome::class, 'upload'])
        ->get('/upload', [UploadHome::class, 'index'])
        ->get('/invoices', [Invoices::class, 'index'])
        ->get('/invoices/create', [Invoices::class, 'create'])
        ->post('/invoices/create', [Invoices::class, 'store']);

// $router->register('/invoices', function() {
//     echo 'Invoices';
// });

// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';

// var_dump($_SERVER['REQUEST_METHOD']);
// die;
echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));

// phpinfo();