<?php

use App\Traits\AllInOneCoffeeMaker;
use App\Traits\CappuccinoMaker;
use App\Traits\CoffeeMaker;
use App\Traits\LatteMaker;

require_once '../../../../vendor/autoload.php';

$coffeeMaker = new CoffeeMaker();
$coffeeMaker->makeCoffee();

$latteMaker = new LatteMaker();
$latteMaker->makeCoffee();
$latteMaker->makeLatte();

$cappuccinoMaker =  new CappuccinoMaker();
$cappuccinoMaker->makeCoffee();
$cappuccinoMaker->makeCappuccino();

$allInOneCoffeeMaker = new AllInOneCoffeeMaker();
$allInOneCoffeeMaker->makeCoffee();
$allInOneCoffeeMaker->makeCappuccino();
$allInOneCoffeeMaker->makeLatte();