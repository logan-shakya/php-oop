<?php

// declare(strict_types = 1);

namespace App\MVC\Controllers;

use App\MVC\View;

class HomeController
{
    public function index(): string
    {
        return (new View('index'))->render();
    }

    public function upload()
    {
        echo '<pre>';
        var_dump($_FILES);
        echo '<pre>';

        $filePath = STORAGE_PATH . '/' . $_FILES['receipt']['name'];

        move_uploaded_file($_FILES['receipt']['tmp_name'], $filePath);

        echo '<pre>';
        var_dump(pathinfo($filePath));
        echo '</pre>';
    }
}
