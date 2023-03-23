<?php

namespace App\MVC;

class RouteNotFoundException extends \Exception
{
    protected $message = "404 NOT FOUND";
}