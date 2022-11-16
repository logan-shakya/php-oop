<?php

namespace App\MaginMethods;

class Invoice
{
    protected array $data;

    public function __get(string $name)
    {
        if(array_key_exists($name, $this->data))
        {
            return $this->data[$name];
        }
        return null;
    }

    public function __set(string $name, $value)
    {
        $this->data[$name] = $value;
    }
}