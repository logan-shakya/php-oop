<?php

namespace App\Iterators;

class InvoiceCollection implements \Iterator
{
    private int $key;

    public function __construct(public array $invoices)
    {
        
    }

    public function current(): mixed
    {
        //returns the current element or current invoice from the list
        echo __METHOD__ . PHP_EOL;

        return $this->invoices[$this->key];
        // return current($this->invoices);
    }

    public function next(): void
    {
        //it should bring the internal pointer to next element
        echo __METHOD__ . PHP_EOL;

        // next($this->invoices);
        ++$this->key;
    }

    public function key(): mixed
    {
        //Return the key of the current element of an array
        echo __METHOD__ . PHP_EOL;

        // return key($this->invoices);
        return $this->key;
    }

    public function valid(): bool
    {
        //it basically checks if current position is valid
        echo __METHOD__ . PHP_EOL;

        //  return current($this->invoices) !== false;
        return isset($this->invoices[$this->key]);
    }

    public function rewind(): void
    {
        //it is used to reset the array pointer back to the begginning 
        echo __METHOD__ . PHP_EOL;

        // reset($this->invoices);
        $this->key = 0;
    }
}