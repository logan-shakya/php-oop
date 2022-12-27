<?php

namespace App;

class DB
{
    public static ?DB $instance = null;

    public function __construct(public array $config)
    {
        echo 'Instance Created <br />';
    }

    public static function getInstance(array $config):DB
    {
        if(self::$instance === null) {
            self::$instance = new DB($config);
        }

        return self::$instance;
    }
}