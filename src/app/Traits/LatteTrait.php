<?php
namespace App\Traits;

trait LatteTrait
{
    private string $milkType = 'whole-milk';
    public function makeLatte()
    {
        echo static::class . 'is making latte ' . $this->milkType . PHP_EOL;
    }

    // abstract public function getMilkType():string;

    public function setMilkType(string $milkType): static
    {
        $this->milktype = $milkType;

        return $this;
    }
}
