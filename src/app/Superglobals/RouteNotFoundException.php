<?php

namespace App\Superglobals;

class RouteNotFoundException extends \Exception
{
    protected $message = "404 NOT FOUND";
}