<?php

namespace App\late_static_binding;

use App\late_static_binding\ClassA;

class ClassB extends ClassA
{
    protected static string $name = 'B';
}