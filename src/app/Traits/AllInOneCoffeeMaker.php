<?php

namespace App\Traits;

class AllInOneCoffeeMaker extends CoffeeMaker
{
    use CappuccinoTrait; 
    use LatteTrait;

    // private string $milkType = ' white milk';

    // public function getMilkType(): string
    // {
    //     return $this->milkType;
    // }
}