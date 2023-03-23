<?php

use App\MVC\Controllers\HomeController;
use App\MVC\Controllers\InvoicesController;
use App\MVC\Router as MVCRouter;
use App\Superglobals\Upload\Home as UploadHome;

require_once __DIR__ . '/../../../../vendor/autoload.php';

define('STORAGE_PATH', __DIR__ . '/../Storage');
define('VIEW_PATH', __DIR__ . '/../views');

// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';

$router = new MVCRouter();

$router->get('/', [HomeController::class, 'index'])
        ->post('/upload', [UploadHome::class, 'upload'])
        ->get('/upload', [UploadHome::class, 'index'])
        ->get('/invoices', [InvoicesController::class, 'index'])
        ->get('/invoices/create', [InvoicesController::class, 'create'])
        ->post('/invoices/create', [InvoicesController::class, 'store']);

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