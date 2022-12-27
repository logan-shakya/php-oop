<?php

namespace App\late_static_binding;

class ClassA
{
    protected static string $name = 'A';

    public function getName() 
    {
        return static::$name;
    }

    public static function make()
    {
        return new static();
    }
}